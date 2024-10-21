import { src, dest, watch } from 'gulp';
import * as dartSass from 'sass';
import gulpSass from 'gulp-sass';

const sass = gulpSass(dartSass);

export function css(done){
    src("src/img/scss/app.scss")
    .pipe( sass() )
    .pipe( dest('build/css') )

    done();
}

export function dev(){
    watch("src/img/scss/app.scss", css);
}