/* eslint-disable */
"use strict";

module.exports = function (grunt) {

    // Time how long tasks take. Can help when optimizing build times
    require("time-grunt")(grunt);

    // Automatically load grunt tasks
    require("load-grunt-tasks")(grunt);

    // Define the configuration for all the tasks
    grunt.initConfig({
        // Project settings

        less: {
            development: {
                options: {
                    strictMath: true,
                    strictUnits: true,
                    cleancss: true,
                    sourceMap: true,
                    sourceMapFilename: "site/themes/precursive/css/precursive.map"
                },
                files: {
                    "site/themes/precursive/css/precursive.css": "site/themes/precursive/css-src/style.less"
                }
            }
        },

        autoprefixer: {
            single_file: {
                options: {
                    browsers: ["last 2 version"]
                },
                src: "site/themes/precursive/css/precursive.css",
                dest: "site/themes/precursive/css/precursive.css"
            },
        },
        
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: "site/themes/precursive/css",
                    src: ["precursive.css"],
                    dest: ".",
                    ext: ".css"
                }]
            }
        },

        eslint: {
            target: ["site/themes/precursive/js-src/**/*.js"]
        },

        uglify: {
            my_target: {
                files: {
                    "site/themes/precursive/js/precursive.js": ["site/themes/precursive/js/precursive.js"]
                }
            }
        },

        watch: {
            css: {
                files: "site/themes/precursive/css-src/**/*.less",
                tasks: "buildcss"
            },
            scripts: {
                files: [
                    "site/themes/precursive/js-src/**/*.js",
                    "Gruntfile.js"
                ],
                tasks: "buildjs"
            }
        },

        browserify: {
            dist: {
                src: ["site/themes/precursive/js-src/main.js"],
                dest: "site/themes/precursive/js/precursive.js",
                options: {
                    browserifyOptions: { debug: true },
                    transform: [["babelify", { "presets": ["es2015"] }]]
                }
            }
        }
    });

    grunt.registerTask("buildcss", ["less", "autoprefixer", "cssmin"]);
    grunt.registerTask("buildjs", ["eslint", "browserify", "uglify"]);
    grunt.registerTask("build", ["buildjs", "buildcss"]);
};
