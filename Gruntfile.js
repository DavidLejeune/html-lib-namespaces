module.exports = function(grunt)
{
    grunt.initConfig({
        phpcs: {
            application: {
                src: ['lib/**/*.php']
            },
            options: {
                standard: 'PSR2'
            }
        },
    watch: {
            scripts:{
                    files: ['lib/**/*.php'],
                    tasks : ['phpcs']
            }
    }
});


    grunt.loadNpmTasks('grunt-phpcs');
    grunt.loadNpmTasks('grunt-contrib-watch');
}
