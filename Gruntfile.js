module.exports = function( grunt ) {

	grunt.initConfig( {

		copy: {
			css: {
				src: [
					'vendor/bower_components/bootstrap/dist/css/bootstrap.css',
					'vendor/bower_components/admin-lte/dist/css/AdminLTE.css',
					'vendor/bower_components/datatables.net-bs/css/dataTables.bootstrap.css',
					'src/assets/css/style.css',
				],
				dest: 'public/assets/css/lib/',
				expand: true,
				flatten: true
			},
			adminlteskins: {
				src: [
					'vendor/bower_components/admin-lte/dist/css/skins/*.min.css',
				],
				dest: 'public/assets/css/skins/',
				expand: true,
				flatten: true
			},
			js: {
				src: [
					'vendor/bower_components/jquery/dist/jquery.js',
					'vendor/bower_components/jquery-ui/jquery-ui.js',
					'vendor/bower_components/bootstrap/dist/js/bootstrap.js',
					'vendor/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
					'vendor/bower_components/admin-lte/dist/js/adminlte.js',
					'vendor/bower_components/datatables.net/js/jquery.dataTables.js',
					'vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.js',
					'src/assets/js/script.js',
				],
				dest: 'public/assets/js/lib/',
				expand: true,
				flatten: true
			},
			img: {
				src: [
					'src/assets/img/login_bg.jpg',
				],
				dest: 'public/assets/img/',
				expand: true,
				flatten: true
			},
			fonts: {
				src: [
					'vendor/bower_components/bootstrap/dist/fonts/*',
				],
				dest: 'public/assets/fonts/',
				expand: true,
				flatten: true
			},
		},

		cssmin: {
			css: {
				files: {  
					'public/assets/css/main.min.css': [  
						'public/assets/css/lib/bootstrap.css',
						'public/assets/css/lib/dataTables.bootstrap.css',
						'public/assets/css/lib/AdminLTE.css',
						'public/assets/css/lib/style.css',
					]
				}
			}
		},

		uglify: {
			topjs: {
				files: {  
					'public/assets/js/top-scripts.min.js': [  
						'public/assets/js/lib/jquery.js',
						'public/assets/js/lib/jquery-ui.js',
						'public/assets/js/lib/bootstrap.js',
						'public/assets/js/lib/bootstrap-datepicker.js',
						'public/assets/js/lib/adminlte.js',
						'public/assets/js/lib/jquery.dataTables.js',
						'public/assets/js/lib/dataTables.bootstrap.js',
					]
				}
			},
			bottomjs: {
				files: {  
					'public/assets/js/bottom-scripts.min.js': [  
						'public/assets/js/lib/script.js',
					]
				}
			}
		}

	} );

	grunt.loadNpmTasks( "grunt-contrib-uglify" );
	grunt.loadNpmTasks( "grunt-contrib-copy" );
	grunt.loadNpmTasks( "grunt-contrib-cssmin" );

	grunt.registerTask( "default", [ "copy", "cssmin", "uglify" ] );
};
