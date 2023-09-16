$(document).ready(function () {
  $(document).on('change', '#does_has_utilunint', function (e) {
    var uom_id = $('#uom_id').val();
    if (uom_id == '') {
      alert("اختر الوحدة الأب أولاً");
      $("#does_has_utilunint")
      return false;
    }

    if ($(this).val() == 1) {
      $("#retail_uom_idDiv").show();
      var retail_uom_id = $("#retail_uom_id").val();
        if (retail_uom_id != '') {
          $(".relatied_retial_counter").show();
        } else {
          $(".relatied_retial_counter").hide();
        }
    }
    else {
      $(".relatied_retial_counter").hide();
      $("#retail_uom_idDiv").hide();
    }
    $("#retail_uom_id").val("");
  });

  $(document).on('change', '#uom_id', function () {
    if ($(this).val() != '') {
      var name = $("#uom_id option:selected").text();
      $(".parentuomname").text(name);
      var does_has_utilunint = $("does_has_utilunint");
      if (does_has_utilunint == 1) {
        var retail_uom_id = $("#retail_uom_id").val();
        if (retail_uom_id != '') {
          $(".relatied_retial_counter").show();
        } else {
          $(".relatied_retial_counter").hide();
        }
        $(".relatied_retial_counter").show();
      }
      else {
        $("relatied_retial_counter").hide();
        $("#retail_uom_idDiv").hide();
      }
      $(".relatied_parent_counter").show();
    }
    else {
      $(".parentuomname").text('');
      $(".relatied_retial_counter").hide();
      $(".relatied_parent_counter").hide();
      $("#retail_uom_idDiv").hide();
    }
  });


  $(document).on('change', '#retail_uom_id', function () {
    if ($(this).val() != '') {
      var name = $("#retail_uom_id option:selected").text();
      $(".childuomname").text(name);
      $(".relatied_retial_counter").show();

    }
    else {
      $(".childuomname").text('');
      $(".relatied_retial_counter").hide();
    }
  });

  $(document).on('click', '#do_add_item_card', function (e) {
    var name=$("#name").val();
    
    if(name == "")
    {
      alert("من فضلك ادخل اسم الصنف");
      $("#name").focus();
      return false;
      
    }

    var item_type=$("#item_type").val();
    if(item_type == "")
    {
      alert("من فضلك ادخل نوع الصنف");
      $("#item_type").focus();
      return false;
    }


    var inv_itemcard_categories_id=$("#inv_itemcard_categories_id").val();
    if(inv_itemcard_categories_id == "")
    {
      alert("من فضلك اختر فئة الصنف");
      $("#inv_itemcard_categories_id").focus();
      return false;
    }

    var uom_id=$("#uom_id").val();
    if(uom_id == "")
    {
      alert("من فضلك ادخل وحدة قياس الأب");
      $("#uom_id").focus();
      return false;
    }

    var does_has_utilunint=$("#does_has_utilunint").val();
    if(does_has_utilunint == "")
    {
      alert("من فضلك اختر حالة هل للصنف وحدة تجزئة");
      $("#does_has_utilunint").focus();
      return false;
    }
    if(does_has_utilunint==1)
    {
      var retail_uom_id=$("#retail_uom_id").val();
      if(retail_uom_id == "")
      {
        alert("من فضلك اختر وحدة القياس التجزئة الابن للصنف");
        $("#retail_uom_id").focus();
        return false;
      }
      var util_uom_quntToParent=$("#util_uom_quntToParent").val();
      if(util_uom_quntToParent == "" || util_uom_quntToParent == 0)
      {
        alert("من فضلك ادخل عدد الوحدات الوحدة التجزئة بالنسبة للأب");
        $("#util_uom_quntToParent").focus();
        return false;
      }
    }
    var price=$("#price").val();
    if(price == "")
    {
      alert("  من فضلك ادخل السعر القطاعي للوحدة الأب");
      $("#price").focus();
      return false;
    }

    var nos_gomla_price=$("#nos_gomla_price").val();
    if(nos_gomla_price == "")
    {
      alert("  من فضلك ادخل السعر القطاعي للوحدة الأب");
      $("#nos_gomla_price").focus();
      return false;
    }
    var gomla_price=$("#gomla_price").val();
    if(gomla_price == "")
    {
      alert("  من فضلك ادخل السعر الجملة للوحدة الأب");
      $("#gomla_price").focus();
      return false;
    }

    var cost_price=$("#cost_price").val();
    if(cost_price == "")
    {
      alert("  من فضلك ادخل سعر التكلفة");
      $("#cost_price").focus();
      return false;
    }
    
    // var cost_price=$("#cost_price").val();
    // if(cost_price == "")
    // {
    //   alert("  من فضلك ادخل سعر التكلفة");
    //   $("#cost_price").focus();
    //   return false;
    // }

    if(does_has_utilunint==1)
    {
    var price_retail=$("#price_retail").val();
    if(price_retail == "")
    {
      alert("  من فضلك ادخل السعر القطاعي للوحدة التجزئة");
      $("#price_retail").focus();
      return false;
    }

    var nos_gomla_price_retail=$("#nos_gomla_price_retail").val();
    if(nos_gomla_price_retail == "")
    {
      alert("  من فضلك ادخل السعر نص جملة للوحدة التجزئة");
      $("#nos_gomla_price_retail").focus();
      return false;
    }
    var gomla_price_retail=$("#gomla_price_retail").val();
    if(gomla_price_retail == "")
    {
      alert("  من فضلك ادخل السعر الجملة للوحدة التجزئة");
      $("#gomla_price_retail").focus();
      return false;
    }

    var cost_price_retail=$("#cost_price_retail").val();
    if(cost_price_retail == "")
    {
      alert("  من فضلك ادخل سعر التكلفة");
      $("#cost_price_retail").focus();
      return false;
    }
  }
  var has_fixced_price=$("#has_fixced_price").val();
  if(has_fixced_price == "")
  {
    alert("  من فضلك اختر حالة هل للصنف سعر ثابت بالفواتير");
    $("#has_fixced_price").focus();
    return false;
  }

  var active=$("#active").val();
  if(active == "")
  {
    alert("  من فضلك اختر حالة تفعيل الصنف");
    $("#active").focus();
    return false;
  }
   
  });




  $(document).on('click', '#do_edit_item_cardd', function (e) {
    
    var barcode=$("#barcode").val();
    
    if(barcode == "")
    {
      alert("من فضلك ادخل الباركود للصنف");
      $("#barcode").focus();
      return false;
      
    }

    var name=$("#name").val();
    if(name == "")
    {
      alert("من فضلك ادخل اسم الصنف");
      $("#name").focus();
      return false;
      
    }

    var item_type=$("#item_type").val();
    if(item_type == "")
    {
      alert("من فضلك ادخل نوع الصنف");
      $("#item_type").focus();
      return false;
    }


    var inv_itemcard_categories_id=$("#inv_itemcard_categories_id").val();
    if(inv_itemcard_categories_id == "")
    {
      alert("من فضلك اختر فئة الصنف");
      $("#inv_itemcard_categories_id").focus();
      return false;
    }

    var uom_id=$("#uom_id").val();
    if(uom_id == "")
    {
      alert("من فضلك ادخل وحدة قياس الأب");
      $("#uom_id").focus();
      return false;
    }

    var does_has_utilunint=$("#does_has_utilunint").val();
    if(does_has_utilunint == "")
    {
      alert("من فضلك اختر حالة هل للصنف وحدة تجزئة");
      $("#does_has_utilunint").focus();
      return false;
    }
    if(does_has_utilunint==1)
    {
      var retail_uom_id=$("#retail_uom_id").val();
      if(retail_uom_id == "")
      {
        alert("من فضلك اختر وحدة القياس التجزئة الابن للصنف");
        $("#retail_uom_id").focus();
        return false;
      }
      var util_uom_quntToParent=$("#util_uom_quntToParent").val();
      if(util_uom_quntToParent == "" || util_uom_quntToParent == 0)
      {
        alert("من فضلك ادخل عدد الوحدات الوحدة التجزئة بالنسبة للأب");
        $("#util_uom_quntToParent").focus();
        return false;
      }
    }
    var price=$("#price").val();
    if(price == "")
    {
      alert("  من فضلك ادخل السعر القطاعي للوحدة الأب");
      $("#price").focus();
      return false;
    }

    var nos_gomla_price=$("#nos_gomla_price").val();
    if(nos_gomla_price == "")
    {
      alert("  من فضلك ادخل السعر القطاعي للوحدة الأب");
      $("#nos_gomla_price").focus();
      return false;
    }
    var gomla_price=$("#gomla_price").val();
    if(gomla_price == "")
    {
      alert("  من فضلك ادخل السعر الجملة للوحدة الأب");
      $("#gomla_price").focus();
      return false;
    }

    var cost_price=$("#cost_price").val();
    if(cost_price == "")
    {
      alert("  من فضلك ادخل سعر التكلفة");
      $("#cost_price").focus();
      return false;
    }
    
    // var cost_price=$("#cost_price").val();
    // if(cost_price == "")
    // {
    //   alert("  من فضلك ادخل سعر التكلفة");
    //   $("#cost_price").focus();
    //   return false;
    // }

    if(does_has_utilunint==1)
    {
    var price_retail=$("#price_retail").val();
    if(price_retail == "")
    {
      alert("  من فضلك ادخل السعر القطاعي للوحدة التجزئة");
      $("#price_retail").focus();
      return false;
    }

    var nos_gomla_price_retail=$("#nos_gomla_price_retail").val();
    if(nos_gomla_price_retail == "")
    {
      alert("  من فضلك ادخل السعر نص جملة للوحدة التجزئة");
      $("#nos_gomla_price_retail").focus();
      return false;
    }
    var gomla_price_retail=$("#gomla_price_retail").val();
    if(gomla_price_retail == "")
    {
      alert("  من فضلك ادخل السعر الجملة للوحدة التجزئة");
      $("#gomla_price_retail").focus();
      return false;
    }

    var cost_price_retail=$("#cost_price_retail").val();
    if(cost_price_retail == "")
    {
      alert("  من فضلك ادخل سعر التكلفة");
      $("#cost_price_retail").focus();
      return false;
    }
  }
  var has_fixced_price=$("#has_fixced_price").val();
  if(has_fixced_price == "")
  {
    alert("  من فضلك اختر حالة هل للصنف سعر ثابت بالفواتير");
    $("#has_fixced_price").focus();
    return false;
  }

  var active=$("#active").val();
  if(active == "")
  {
    alert("  من فضلك اختر حالة تفعيل الصنف");
    $("#active").focus();
    return false;
  }
   
  });

  $(document).on('input', '#search_by_text', function (e) {
    make_search();
});

  $(document).on('change', '#item_type_search', function (e) {
    make_search();
});

$(document).on('change', '#inv_itemcard_categories_id_search', function (e) {
  make_search();
});

$('input[type=radio][name=searchbyradio]').change(function(){
  make_search();
});
function make_search() {
    var search_by_text = $("#search_by_text").val();
    var item_type = $("#item_type_search").val();
    var inv_itemcard_categories_id = $("#inv_itemcard_categories_id_search").val();
    var searchbyradio = $("input[type=radio][name=searchbyradio]:checked").val();
    var token_search = $("#token_search").val();
    var ajax_search_url = $("#ajax_search_url").val();

    jQuery.ajax({
        url: ajax_search_url,
        type: 'post',
        dataType: 'html',
        cache: false,
        data: { 'search_by_text': search_by_text,'item_type':item_type, 'inv_itemcard_categories_id':inv_itemcard_categories_id, "_token": token_search, searchbyradio:searchbyradio},
        
        success: function (data) {
            console.log(data)
            $("#ajax_responce_serarchDiv").html(data);
        },
        error: function () {

        }
    });

} 

     $(document).on('click', '#ajax_pagination_in_search a ', function (e) {
        e.preventDefault();
        var search_by_text = $("#search_by_text").val();
    var item_type = $("#item_type_search").val();
    var inv_itemcard_categories_id = $("#inv_itemcard_categories_id_search").val();
    var searchbyradio = $("input[type=radio][name=searchbyradio]:checked").val();
    var token_search = $("#token_search").val();
        var url = $(this).attr("href");
        var token_search = $("#token_search").val();

        jQuery.ajax({
            url: url,
            type: 'post',
            dataType: 'html',
            cache: false,
            data: { 'search_by_text': search_by_text,'item_type':item_type, 'inv_itemcard_categories_id':inv_itemcard_categories_id, "_token": token_search, searchbyradio:searchbyradio},
            success: function (data) {

                $("#ajax_responce_serarchDiv").html(data);
            },
            error: function () {

            }
        });



    });

  });




