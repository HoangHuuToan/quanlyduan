<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assests/css.css">
</head>
<body>

    <header class="header">
        <a href="index.php"><h1>Các Dự Án Tiêu Biểu  Năm 2022</h1></a>
    </header>
<div style="display:flex;">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="task_search">
        <input class="search_bar" type="text" name="textSearch">
        <input class="btn-search" type="submit" value="Tìm Kiếm" name="submit">
    </form>

</div>
    
    

    <div class="list_menu">


        <a href="index.php?duan=CC">
            <div class="menu ">
                CHUNG CƯ
            </div>
        </a>         
        
        <a href="index.php?duan=BT">
            <div class="menu ">
                BIỆT THỰ
            </div>
        </a>

        <a href="index.php?duan=NP">
            <div class="menu ">
                NHÀ PHỐ
            </div>
        </a>

        <a href="index.php?duan=NH">
            <div class="menu ">
                NHÀ HÀNG
            </div>
        </a>

        <a href="index.php?duan=NTVP">
            <div class="menu">
                NỘI THẤT VĂN PHÒNG
            </div>
        </a>

        <a href="index.php?duan=NTCF">
            <div class="menu">
                NỘI THẤT QUÁN CAFE
            </div>
        </a>
        

    </div>

<?php
    echo '<h1>Connect Database</h1>';
    require '../vendor/autoload.php';
    //connect_DB
    use Connect_DB\Drive\DB_Drive as DB_Drive;
    $DB = new DB_Drive();
    //


    function print_product($result){
        echo '<div class="list_products">';
                foreach($result as $key => $value){
                    echo '<div class="product">
                        <div class="product_img" style="background-image: url('.$value['AnhDA'].');">
                        </div> 
                        <div class="product_name">
                            '.$value['TenDA'].'
                        </div>
                    </div>';
                }
        echo '</div>';
    }


    function render(){   
        
        global $DB;
        $result = $DB->get_list("SELECT * FROM quanlyduan WHERE LoaiDA='".$_GET['duan']."'" );

        print_product($result);

    };

    

    if(isset($_GET['duan'])){
        render();
    };
    if(!isset($_GET['duan']) && !isset($_POST['submit']))
    {
        global $DB;
        $result = $DB->get_list("SELECT * FROM quanlyduan" );
      
        print_product($result);
        
    }    

    function searchDA($textSearch)
    {
        $textSearch = trim($textSearch);

        global $DB;
        $result = $DB->get_list("SELECT * FROM quanlyduan WHERE TenDA LIKE'%".$textSearch."%'");
        if($result== null)
        {   
            echo "Hiện Chưa Có dự án mà bạn cần tìm";
        }

        print_product($result) ;
        
    }   

    if(isset($_POST['submit']) && isset($_POST['textSearch']) )
    {   
        $textSearch= $_POST['textSearch'];
        searchDA($textSearch);
    }
?>

</body>
<script src="assests/js.js">

</script> 



</html>
    

