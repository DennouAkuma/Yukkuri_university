$(function(){
    var slide_tag_str = "#slide_content";
    var slide_all_str = "#slide_all";

    var slide_time = 2;//スライドの移動時間(秒)
    var sleep_time = 5;//スライドの表示時間(秒)

/*===================これ以上、下は変更しない事==================*/

    var id_array = setting_slide(slide_tag_str,
                                slide_all_str,
                                slide_time,
                                sleep_time);
});

function setting_slide(slide_tag,slide_all,sli_time,slp_time){
    var img_object = $(slide_tag).find('img');
    var img_width = $(slide_tag).width();

    if(img_width > 1080){
        img_width = img_width - 17
    }
    
    var img_class_str = "slide_img_class";
    var max_width = (img_width * img_object.length) + (img_object.length * 2);

    var slide_time = sli_time * 1000;
    var sleep_time = slp_time * 1000;

    //画像にクラス追加
    var chas_id_str = slide_tag + " img";
    $(chas_id_str).each(function(i){
        $(this).attr('class', img_class_str).trigger('create');
    });

    var chas_class_str = "." + img_class_str;
    $(chas_class_str).css('width',img_width);
    var img_height = img_object.height();

    $(slide_all).css('width',img_width);
    $(slide_all).css('height',img_height)

    $(slide_tag).css('width',img_width);
    $(slide_tag).css('height',img_height)
    $(slide_all).css('width',max_width);
    
    var chas_count = 0;
    setInterval(function(){
        var move_length = ((img_width * chas_count) + (chas_count * 2) )* -1
        $(slide_all).animate({left:move_length},slide_time);

        if(chas_count >= (img_object.length - 1)){
            chas_count = 0;
        }
        chas_count = chas_count + 1;
    },sleep_time);
}

