$(function(){
    $('.thumbs img').click(function(){
        var cover = $('.cover img');
        var thumb = $(this).attr('src');

       if(cover.attr('src') !== thumb){
            cover.fadeTo('200', '0', function(){
                cover.attr('src',thumb);
                cover.fadeTo('150','1');
            });

            $('.thumbs img').removeClass('active');
            $('.thumbs img').addClass('gallery');
            $(this).addClass('active');
        }
    });
});

$(function(){
    $('.thumbs2 img').click(function(){
        var cover = $('.cover2 img');
        var thumb = $(this).attr('src');

       if(cover.attr('src') !== thumb){
            cover.fadeTo('200', '0', function(){
                cover.attr('src',thumb);
                cover.fadeTo('150','1');
            });

            $('.thumbs2 img').removeClass('active2');
            $('.thumbs2 img').addClass('gallery2');
            $(this).addClass('active2');
        }
    });
});

$(function(){
    $('.thumbs3 img').click(function(){
        var cover = $('.cover3 img');
        var thumb = $(this).attr('src');

       if(cover.attr('src') !== thumb){
            cover.fadeTo('200', '0', function(){
                cover.attr('src',thumb);
                cover.fadeTo('150','1');
            });

            $('.thumbs3 img').removeClass('active3');
            $('.thumbs3 img').addClass('gallery3');
            $(this).addClass('active3');
        }
    });
});