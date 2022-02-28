<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>อย่าลืมแก้ไตเติ้ล</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sarabun">
    <style>
    	body{
		font-family: 'Sarabun';
	}
	    .container{border-radius: 15px;}
      #header{
        height: 160px;
        background-color: orange;
      }
      #sidebar{
        background-color: green;
        padding: 0px;
      }
      #content{
        background-color: gray;
      }
      #footer{
        height: 200px;
        background-color: pink;
      }
      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 100%;
        background-color: #f1f1f1;
      }
      li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
      }
      /* Change the link color on hover */
      li a:hover {
        background-color: #555;
        color: white;
      }
    </style>
    
  </head>
  <body> 
    <div class="container"> <!-- คอนเทนเนอร์ -->
      <div class="row">
        <div class="col-12" id="header"> <!-- เฮดเดอร์ -->
          <h1>Header</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-2" id="sidebar"> <!-- ไซด์บาร์ -->
          <ul>
            <li><a href="index.php">หน้าแรก</a></li>
            <li><a href="#">แหล่งท่องเที่ยว</a></li>
            <li><a href="#">ประเพณีและวัฒนธรรม</a></li>
            <li><a href="#">อาหารประจำท้องถิ่น</a></li>
            <li><a href="#">ข้อมูลผู้จัดทำ</a></li>
          </ul>
        </div>
        <div class="col-10" id="content"> <!-- คอนเท้นต์ -->
          <center><h1>Content</h1></center>
	  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
		  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
		  when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
		  It has survived not only five centuries, but also the leap into electronic typesetting, 
		  remaining essentially unchanged. 
		  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
		  and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
       <div class="row">
        <div class="col-12" id="footer"> <!-- ฟุตเตอร์ -->
          <h1>Footer</h1>
        </div>
      </div>
    </div>  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
