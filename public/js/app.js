$(document).ready(function(){
    $(".num-order").change(function(){
        var id = $(this).attr("data-id");
        var qty = $(this).val();
        var data ={ id:id,
                    qty:qty
                };
        // console.log(data);
        $.ajax({
            url:"?mod=cart&act=update_ajax",
            method:"POST",
            dataType:'json',
            data:data,
            success:function(data){
                $("#sub-total-"+id).text(data.sub_total);
                $("#total-price span").text(data.total);
                $("#btn-cart span#num").text(data.cnt);
            }
        });
    })
})