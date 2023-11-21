<html>
    <head>
    </head>
    <body>
        <div class = "container">
            <h1>FORM</h1>
            <hr>
            <form action = "<?php echo e(url('/add')); ?>" method = "POST">
                <?php echo csrf_field(); ?>
                <div class = "form-goup">
                    <label for = "nim">NIM</label>
                    <input type = "text" class = "form-control" id = "nim" name = "nim">
                </div>

                <div class = "form-goup">
                    <label for = "name">Name</label>
                    <input type = "text" class = "form-control" id = "name" name = "name">
                </div>
                
                <div class = "form-goup">
                    <label for = "email">Email</label>
                    <input type = "text" class = "form-control" id = "email" name = "email">
                </div>

                <div class = "form-goup">
                    <label>Gender</label>
                    <div>
                        <div class = "form-check">
                            <input class = "form-check-input" type = "radio" name = "gender" id = "male" value = "M">
                            <label class = "form-check-label" for = "male">M</label>
                        </div>
                        <div class = "form-check">
                            <input class = "form-check-input" type = "radio" name = "gender" id = "female" value = "F">
                            <label class = "form-check-label" for = "female">F</label>
                        </div>
                    </div>
                </div>

                <div class = "form-goup">
                    <label for = "major">Major</label>
                    <select class = "form-control" name ="major" id = "major">
                        <option value ="IT">IT</option>
                        <option value = "CS">CS</option>
                    </select>
                </div>

                <div class = "form-goup">
                    <label for = "address">Address</label>
                    <textarea class = "form-control" id = "address" rows = "3" name ="address">
                    </textarea>
                </div>

                <button type ="submit" class = "btn-submit">Daftar</button>
        </div>
    </body>
</html>
<?php /**PATH D:\Binus\1.Notes\Semester_5\WebProg\Test Projects\Fresh Install\freshInstall\resources\views/form.blade.php ENDPATH**/ ?>