var gulp = require('gulp'),
 sass = require('gulp-sass'); //Подключаем Sass пакет;
  browserSync = require('browser-sync'); // Подключаем Browser Sync
  cssnano = require('gulp-cssnano'), // Подключаем пакет для минификации CSS
rename = require('gulp-rename'); // Подключаем библиотеку для переименования файлов

  gulp.task('sass', function(){ // Создаем таск "sass"
      return gulp.src('sass/main.sass') // Берем источник
          .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
          .pipe(gulp.dest('css/')) // Выгружаем результата в папку app/css
          .pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
  });

  gulp.task('browser-sync', function() { // Создаем таск browser-sync
     browserSync({ // Выполняем browser Sync
         server: { // Определяем параметры сервера
             baseDir: './'
              // Директория для сервера - app
         },
         notify: false // Отключаем уведомления
     });
 });

 gulp.task('css-libs', ['sass'], function() {
     return gulp.src('css/main.css') // Выбираем файл для минификации
         .pipe(cssnano()) // Сжимаем
         .pipe(rename({suffix: '.min'})) // Добавляем суффикс .min
         .pipe(gulp.dest('css/')); // Выгружаем в папку app/css
 });

 gulp.task('watch',['browser-sync','css-libs', 'sass'], function() {
     gulp.watch('sass/*.sass', ['sass']); // Наблюдение за sass файлами
     gulp.watch('*.html', browserSync.reload); // Наблюдение за HTML файлами в корне проекта
     gulp.watch('js/**/*.js', browserSync.reload);
     gulp.watch('**/*.php', browserSync.reload);
 });
