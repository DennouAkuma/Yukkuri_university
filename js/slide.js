$(function(){
    var slide_tag_str = "#cp_slidewrapper";
    var slide_time = 5;//スライドの移動時間(秒)
    var sleep_time = 5;//スライドの表示時間(秒)

    var id_array = setting_slide(slide_tag_str);
    main_slide(id_array,slide_tag_str);
});

//スライドの対象(画像)を取得
function setting_slide(slide_tag){
    var img_object = $(slide_tag).find('img');
    var img_width = img_object.width();
    var img_height = img_object.height();
    var img_id_array = [];

    //親要素の立幅を決める
    $(slide_tag).height(img_height);

    //id追加
    var chas_id_str = slide_tag + " img";
    $(chas_id_str).each(function(i){
        var chas_str = 'slide_content_' + i;
        $(this).attr('id', chas_str).trigger('create');
        chas_str = "#" + chas_str;
        img_id_array.push(chas_str);
    });

    var chas_width = 0;
    for(var i = 0;i < img_id_array.length;i++){
        $(img_id_array[i]).css('left', chas_width);
        chas_width = chas_width + img_width;
        console.log(chas_width);
    }

    return img_id_array; 
}

//スライドのメイン(横移動)
function main_slide(img_id_array,slide_tag,sli_time,sle_time){
    var img_object = $(slide_tag).find('img');
    var img_width = img_object.width();
    var sleep_time = sli_time * 1000;
    var slide_time = sli_time * 1000;

    var slide_A = 0;
    var slide_B = slide_A + 1;
    var slide_C = img_object.length - 1;

    var position_A = img_width;
    var position_B = 0;
    var position_C = img_width * (-1);

    $("#test").click(function(){
        $(img_id_array[slide_B]).animate({left:position_A});
        $(img_id_array[slide_A]).animate({left:position_B});
        $(img_id_array[slide_C]).css('left',position_C);
    
        console.log("B = " + slide_B)
        console.log("A = " + slide_A)
        console.log("C = " + slide_C)
        slide_A = slide_A + 1;
        slide_B = slide_B + 1;
        slide_C = slide_C + 1;
        


        if(slide_A >= img_object.length){
            slide_A = 0
        }
        if(slide_B >= img_object.length){
            slide_B = 0
        }
        if(slide_C >= img_object.length){
            slide_C = 0
        }
    })

}

