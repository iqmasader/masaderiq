


<!DOCTYPE html>
<html>
<head>
  <title> توثيق برنامج </title>
  <meta charset="utf-8">
  <meta http-equiv="Cache-Control" content="no-cache" />
    <meta name="description" content="عبدالقادر المالكي">
  <meta http-equiv="Pragma" content="no-cache" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/uikit-rtl.css" />
  <link rel="stylesheet" href="css/styless.css" />
</head>
<body>
  <div id="HomePage">
      <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">  
    <div>
      <center>
        <a href="index.php"><img src="img/logo989887.png" style="width:200px;" /></a>
        <h2 class="aid-text">
      نموذج توثيق تقرير برنامج أو مبادرة أو حملة
</h2>
        <div class="clr"></div><br>
        <form action="index.php" method="post" enctype="multipart/form-data" style="font-family: 'Amiri', serif !important;">
          <fieldset class="uk-fieldset">

          <div class="upld">
            <input class=" btn-2" type="file" name="fileToUpload" id="uploaded-image">
            <label class="inpu" for="uploaded-image">إختر صورة من جهازك 1</label>
            </div>
          <div class="upld">
            <input class=" btn-2" type="file" name="fileToUpload2" id="uploaded-image2">
            <label class="inpu" for="uploaded-image2">إختر صورة من جهازك 2</label>
            </div>
          <div  class="upld">
            <input class=" btn-2" type="file" name="fileToUpload3" id="uploaded-image3">
            <label class="inpu" for="uploaded-image3">إختر صورة من جهازك 3</label>
            </div>
          <div class="upld" >
            <input class=" btn-2" type="file" name="fileToUpload4" id="uploaded-image4">
            <label class="inpu" for="uploaded-image4">إختر صورة من جهازك 4</label>
            </div>

            <div class="uk-margin">
              <input class="uk-input inpu" type="text" style="border-radius:6px !important;font-size:17px !important" name="name1" id="name1" placeholder="ادارة التعليم" value="الادارة العامة للتعليم بمنطقة" >
            </div>
  
            <div class="uk-margin">
              <input class="uk-input inpu" type="text" style="border-radius:6px !important;font-size:17px !important" name="name2" id="name2" placeholder="مكتب التعليم" value="مكتب التعليم بـ" >
            </div>


            <div class="uk-margin">
          <textarea dir="rtl"  class="uk-input inpu" name="text" id="textarea" style="border-radius:6px; text-align: right; height: 190px !important;font-size:17px !important; " placeholder="اكتب الأهداف هنا كل هدف في سطر"></textarea>
          </div>

          
            <div class="uk-margin">
              <input class="uk-input inpu" type="text" style="border-radius:6px !important;font-size:17px !important" name="name3" id="name3" placeholder="اسم المنفذ"  >
            </div>
            <div class="uk-margin">
              <input class="uk-input inpu" type="text" style="border-radius:6px !important;font-size:17px !important" name="name4" id="name4" placeholder="اسم البرنامج" >
            </div>
            <div class="uk-margin">
              <input class="uk-input inpu" type="text" style="border-radius:6px !important;font-size:17px !important" name="name7" id="name7" placeholder="مكان التنفيذ" >
            </div>
            <div class="uk-margin">
              <input class="uk-input inpu" type="text" style="border-radius:6px !important;font-size:17px !important" name="name8" id="name8" placeholder="المستهدفون" >
            </div>
            <div class="uk-margin">
              <input class="uk-input inpu" type="text" style="border-radius:6px !important;font-size:17px !important" name="name9" id="name9" placeholder="عدد المستهدفين" >
            </div>
            <div class="uk-margin">
              <input class="uk-input inpu" type="text" style="border-radius:6px !important;font-size:17px !important" name="name10" id="name10" placeholder="تاريخ التنفيذ" >
            </div>
           
            <div class="uk-margin">
              <input class="uk-input inpu" type="text" style="border-radius:6px !important;font-size:17px !important" name="name5" id="name5" placeholder="اسم المدرسة" >
            </div>
           
            <div class="uk-margin">
              <input class="uk-input inpu" type="text" style="border-radius:6px !important;font-size:17px !important" name="name6" id="name6" placeholder="حساب تويتر - اختياري" >
            </div>
           


            <div class="uk-margin">
              <button type="submit" name="submit" class="uk-button button" style="border-radius:6px !important;font-size:17px !important;padding:3px !important; width:200px !important; font-family: 'Amiri', serif !important; " onclick="storeLines()"> عرض <i class="fa fa-eye">  </i></button>

              <button type="submit" name="submit1" class="uk-button button" style="border-radius:6px !important;font-size:17px !important;padding:3px !important; width:200px !important; font-family: 'Amiri', serif !important; " onclick="storeLines()"> تحميل <i class="fa fa-file" >  </i></button>
              <button type="submit" name="submit2" class="uk-button button" style="border-radius:6px !important;font-size:17px !important;padding:3px !important; width:200px !important; font-family: 'Amiri', serif !important; " onclick="storeLines()"> pdf تحميل <i class="fa fa-file" >  </i></button>
            </div>

            <br />

            <div class="uk-margin">
              <a href=" https://twitter.com/justqedo" target="black">
                برمجة وتصميم
              </a><br><br>
              <img src="img/logooooo.png" style="width:100px;" />
              <div class="uk-margin">
                عدد البطاقات المطبوعة
                <?php echo file_get_contents("use.txt");?>
              </div>
          </fieldset>
        </form>
        <div class="clr"></div><br>
      </center>
    </div>
  </div>

<script>

function storeLines(){
  localStorage.clear();
  localStorage.setItem("name1", document.getElementById("name1").value);
  localStorage.setItem("name2", document.getElementById("name2").value);
  localStorage.setItem("name3", document.getElementById("name3").value);
  localStorage.setItem("name4", document.getElementById("name4").value);
  localStorage.setItem("name5", document.getElementById("name5").value);
  localStorage.setItem("name6", document.getElementById("name6").value);
  localStorage.setItem("name7", document.getElementById("name7").value);
  localStorage.setItem("name8", document.getElementById("name8").value);
  localStorage.setItem("name9", document.getElementById("name9").value);
  // localStorage.setItem("name10", document.getElementById("name10").value);

  let textarea = document.getElementById("textarea");
    let lines = textarea.value.split("\n");
    for (let i = 0; i < lines.length; i++) {
          localStorage.setItem("line" + i, lines[i]);
    }
}

function setDefaultValue() {
      

  
    let textarea = document.getElementById("textarea");
    let lines = [];
    let i = 0;
    while (localStorage.getItem("line" + i) !== null) {
        lines.push(localStorage.getItem("line" + i));
        i++;
    }
    textarea.value = lines.join("\n");
    document.getElementById("name1").value = localStorage.getItem("name1");
    document.getElementById("name2").value = localStorage.getItem("name2");
    document.getElementById("name3").value = localStorage.getItem("name3");
    document.getElementById("name4").value = localStorage.getItem("name4");
    document.getElementById("name5").value = localStorage.getItem("name5");
    document.getElementById("name6").value = localStorage.getItem("name6");
    document.getElementById("name7").value = localStorage.getItem("name7");
    document.getElementById("name8").value = localStorage.getItem("name8");
    document.getElementById("name9").value = localStorage.getItem("name9");
    // document.getElementById("name10").value = localStorage.getItem("name10");

}
window.onload = setDefaultValue;





let input = document.getElementById("name10");
let date = new Date();
date.setDate(date.getDate());
let options = {
  calendar: "islamic",
  year: 'numeric',
  month: '2-digit',
  day: '2-digit'
};
let hijriDate = new Intl.DateTimeFormat("en-SA-u-ca-islamic", options).format(date);
hijriDate = hijriDate.replace("AH", "");
input.value =" "+hijriDate[6]+hijriDate[7]+hijriDate[8]+hijriDate[9]+" - "+hijriDate[0]+hijriDate[1]+" - "+hijriDate[3]+hijriDate[4]+ " هـ " ;



</script>

</body>
</html>