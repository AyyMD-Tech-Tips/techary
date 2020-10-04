$(document).ready(function(){
    // when the user clicks on like
    $('.upvote').on('click', function(){
        var postid = $(this).attr('id');
            $post = $(this);
            
        $.ajax({
            url: 'index.php',
            type: 'post',
            data:{
                'upvoted': 1,
                'postid': postid
            },
            
            success: function(response){
                $post.parent().find('span.ups_count');
                $post.addClass('hide');
                $post.siblings().removeClass('hide');
                console.log(response);
                
            }
        });
    });

    // when the user clicks on unlike
    $('.downvote').on('click', function(){
        var postid = $(this).attr('id');
        $post = $(this);

        $.ajax({
            url: 'index.php',
            type: 'post',
            data:{
                'downvoted': 1,
                'postid': postid
            },
            success: function(response){
                $post.parent().find('span.downs_count');
                $post.addClass('hide');
                $post.siblings().removeClass('hide');
            }
        });
    });
});