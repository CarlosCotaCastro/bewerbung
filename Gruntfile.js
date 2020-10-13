module.exports = function (grunt) {
	// Project configuration.
	grunt.initConfig({
		stylus: {
			compile: {
				options: {},
				files: {
					'httpdocs/css/styles.css': 'httpdocs/stylus/styles.styl'
				}
			}
		},
		open : {
			dev : {
			  path: 'http://localhost:8000',
			  app: 'Google Chrome'
			}
		},
		watch: {
			css: {
				files: ['httpdocs/stylus/*.styl'],
				tasks: ['stylus'],
				options: {
					livereload: true
				}
			},
			php: {
				files: ['**/*.php'],
				options: {
					livereload: true
				}
			}
		}

	});

	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-stylus');
	grunt.loadNpmTasks('grunt-open');

	grunt.registerTask('default', ['stylus', 'open', 'watch']);

};
