<!DOCTYPE html>
<html>
<body>

<h2>The XMLHttpRequest Object</h2>

<h3>Start typing a name in the input field below:</h3>

<p>Suggestions: <span id="txtHint"></span></p>

<p>First name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

<script>
    //khởi tạo hàm showHint với tham số str
    function showHint(str) {
        //khai báo biến xhttp
        var xhttp;
        //nếu không nhập vào thì k hiển thị gì
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        //khởi tạo đối tượng XMLHttpRequest
        xhttp = new XMLHttpRequest();
        //onreadystatechange là 1 thuộc tính của XMLHttpRequest lắng nghe và xử lý một sự kiện khi có thay đổi về trạng thái nào diễn ra
        xhttp.onreadystatechange = function () {
            //readyState là thuộc tính nghĩa trạng thái hiện tại của đối tượng XMLHttpRequest
            //status là thuộc tính trả về trạng thái của request
            if (this.readyState == 4 && this.status == 200) {
                //nếu request đã hoàn thiện và trạng thái OK ta sẽ thay thế nội dung thẻ span bằng giá trị phản hồi dưới dạng 1 chuỗi
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        //open là phương thức của XMLHttpRequest xác định rõ request là POST hay GET, ....
        xhttp.open("GET", "gethint.php?q=" + str, true);
        //send là phương thức của XMLHttpRequest gửi request đến server
        xhttp.send();
    }
</script>

</body>
</html>