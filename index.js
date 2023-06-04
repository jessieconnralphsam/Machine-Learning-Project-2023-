document.getElementById("send-btn").addEventListener("click", function() {
    // console.log('clicked');

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "mes.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
      }
    };

    let dataValue = document.getElementById('data').value;  //image

    var data = `text=${dataValue}`;
    xhr.send(data);

});