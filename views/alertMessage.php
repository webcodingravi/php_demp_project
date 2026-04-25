<?php
$successMessage = getSuccessMessage();
  $errorMessage = getErrorMessage();
  
if(!empty($successMessage)) {
  echo "<div class='text-green-800 bg-green-200 rounded px-6 py-2'  x-show='show' x-data='{
        show: true,
        init() {
            setTimeout(() => {
                this.show = false
            }, 3000)
        }
    }'>$successMessage</div>";
}


if(!empty($errorMessage)) {
  echo "<div class='text-rose-800 bg-rose-200 rounded px-6 py-2' x-show='show' x-data='{
        show: true,
        init() {
            setTimeout(() => {
                this.show = false
            }, 3000)
        }
    }'>$errorMessage</div>";
}
?>