$(function(){
    $('.addMovieButton').on('click', function(){
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/movies/add/')
        $('#modalTitle').html('Add Movie')
        $('#movieTitle').val("");
        $('#movieYear').val("");
        $('#movieRated').val("");
        $('#movieGenre').val("");
        $('#moviePoster').val("");
    });

    
    $('.showModalUpdate').on('click', function(){
        $('#modalTitle').html('Update Movie')
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/movies/update/')
        const id = $(this).data('id');  
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/movies/getUpdate',
            data: {id : id},
            method: 'post',
            success: function(data) {
                data = JSON.parse(data);
                // console.log(data);
                $('#movieTitle').val(data.title);
                $('#movieYear').val(data.year);
                $('#movieRated').val(data.rated);
                $('#movieGenre').val(data.genre);
                $('#moviePoster').val(data.poster);
                $('#id').val(data.id);
            }
        });
    });
});