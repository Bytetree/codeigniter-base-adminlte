module.exports = function( grunt ) {

	grunt.initConfig( {

		copy: {
			css: {
				src: [
					'vendor/bower_components/bootstrap/dist/css/bootstrap.css',
					'vendor/bower_components/admin-lte/dist/css/AdminLTE.css',
				],
				dest: 'public/assets/css/lib/',
				expand: true,
				flatten: true
			}
		},

		cssmin: {
			css: {
				files: {  
					'public/assets/css/main.min.css': [  
						'public/assets/css/lib/bootstrap.css',
						'public/assets/css/lib/AdminLTE.css',
					]
				}
			}
		}

	} );

	grunt.loadNpmTasks( "grunt-contrib-uglify" );
	grunt.loadNpmTasks( "grunt-contrib-copy" );
	grunt.loadNpmTasks( "grunt-contrib-cssmin" );

	grunt.registerTask( "default", [ "copy", "cssmin" ] );
};
