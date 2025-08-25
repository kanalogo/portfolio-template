import gulp from 'gulp';
import sass from 'gulp-dart-sass'; // ✅ dart-sass はこれでOK
import cleanCSS from 'gulp-clean-css';
import uglify from 'gulp-uglify';
import concat from 'gulp-concat';
import rename from 'gulp-rename';
import sourcemaps from 'gulp-sourcemaps';
import browserSyncPkg from 'browser-sync';
import autoprefixer from 'gulp-autoprefixer';
import imagemin from 'gulp-imagemin';

const { src, dest, watch, series, parallel } = gulp;
const browserSync = browserSyncPkg.create();

// パス設定
const paths = {
  scss: 'src/css/style.css',
  js: 'src/js/script.js',
  images: 'src/img/**/*',
};

// Sassコンパイル
function compileSass() {
  return src(paths.scss)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError)) // ✅ ここがエラー原因 → sass() は不要だった
    .pipe(autoprefixer({ cascade: false }))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('dist/css'))
    .pipe(browserSync.stream());
}

// JS圧縮
function minifyJs() {
  return src(paths.js)
    .pipe(sourcemaps.init())
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('dist/js'))
    .pipe(browserSync.stream());
}

// 画像最適化
function images() {
  return src(paths.images)
    .pipe(imagemin())
    .pipe(dest('dist/img'));
}

// ローカルサーバー + 監視
function serve() {
  browserSync.init({
    server: {
      baseDir: './'
    }
  });

  watch('src/css/**/*.css', compileSass);
  watch('src/js/**/*.js', minifyJs);
  watch(paths.images, images);
  watch('./index.html').on('change', browserSync.reload);
}

// デフォルトタスク
export default series(
  parallel(compileSass, minifyJs, images),
  serve
);
