/*var otherReqForm = document.getElementsByClassName('otherReq'),
otherREqBtn = document.getElementsByClassName('other_req');

for (let i = 0; i < 10; ++i ) {
otherREqBtn.addEventListener('click', function() {
    document.write('otherReqForm');
}, false)
}*/

function fetchParent(id){
    $('#parents').html('');
    $ajax({
        type:'post',
        url:'stdnt2db.php',
        data:{}
    })
    
}