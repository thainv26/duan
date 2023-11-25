// chạy ảnh tự động
let index=0;
function autoslide() {
    let img = document.getElementsByClassName('img');
    if(index >= img.length){
        index = 0;
    }
    for(let i= 0; i < img.length; i++){
        img[i].style.display='none';
    }
        img[index].style.display='block';
        index++;
}
window.addEventListener('load', function() {
    autoslide();
});

setInterval(autoslide,2000);
// // tìm kiếm danh mục trong admin/sản phẩm

// function hienthi(){
//     let dm=document.getElementById('danhmuc').value;
//     $.ajax(
//         {
//             url:'index.php?act=sanpham',
//             type: 'GET',
//             data: {id_dm: $dm},
//             success: function(data){
//                 $('#data').html(data);
//             }
//         }
//     )
// }
////////////////////////////////////////////////////////
