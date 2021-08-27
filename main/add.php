<!DOCTYPE html>
<html lang="en">
<title>Add</title>
<link href="./css/style.css" rel="stylesheet">
    
<?php 

    if(isset($_GET['submit'])){
        echo $_GET['sku'];
        echo $_GET['name'];
        echo $_GET['price'];
    }

?>


<!-- This is a Header -->
<?php $navBarName = "Product Add"; ?>
<?php include 'elements/header.php';?>
<!--                  -->

    <h5 class="ml-auto">Add a product</h4>
    <form action="add.php" method="GET" class="bg-primary col-lg-2">

        <label for="sku">SKU</label>
        <input type="text" id="sku" name="sku"><br><br>

        <label for="name">Name</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="price">Price ($)</label>
        <input type="text" id="price" name="price"><br><br>
        
    </form>


    <script>

        function changeFunc(){
            //This figures out which productType is selected in Type Switcher
            var productType = document.getElementById("productType");
            var selectedValue = productType.options[productType.selectedIndex].value;
            alert(selectedValue);

            if (selectedValue === 'dvd'){
                deleteElement();
                apendDvd();
                // var size = document.createElement("INPUT");
                // size.setAttribute("id","size");
                // size.setAttribute("placeholder","MB");
                // document.body.appendChild(size);

            } else if(selectedValue === 'furniture'){
                //  var element = document.getElementById('height').remove();

                var height = document.createElement("INPUT");
                height.setAttribute("id","height");
                height.setAttribute("placeholder","CM");
                document.body.appendChild(height);

                var length = document.createElement("INPUT");
                length.setAttribute("id","length");
                length.setAttribute("placeholder","CM");
                document.body.appendChild(length);

                var width= document.createElement("INPUT");
                width.setAttribute("id","width");
                width.setAttribute("placeholder","CM");
                document.body.appendChild(width);

                // size.removeChild(size);
                
            }else{
                alert("Else worked.");
            }
    

        }
        function deleteElement() {
            //This Deletes all parts of DVD
            document.getElementById('dvd').remove();

            //This Deletes all parts of Furniture
            document.getElementById('height').remove();
            document.getElementById('length').remove();
            document.getElementById('width').remove();
            
        
        }


        
        function apendDvd() {
            var dvdBlock = document.createElement("INPUT");
            dvdBlock.setAttribute("id","size");
            dvdBlock.setAttribute("placeholder","MB");
            document.body.appendChild(dvdBlock);
        }
    </script>



    <form action="">
        <label for="productType">Type Switcher:</label>
        <select name="productType" id="productType" onchange="changeFunc();">
            <option value="dvd">DVD</option>
            <option value="furniture">Furniture</option>
            <option value="book">Book</option>
        </select>
    </form>
    
   


<!-- This is a Footer -->
<?php include 'elements/footer.php';?>
<!--                  -->


</html>