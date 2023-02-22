<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daraja</title>

    <link href="" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" ">
  
  </head>
  <body >
    <div class="container d-flex justify-content-center">
      <div class="card mt-5 px-3 py-4" style="border:2px solid green">
        <div class="d-flex flex-row justify-content-around">
          <div><span style="text-decoration: underline;">Mpesa </span></div>
         
        </div>
        <div class="media mt-4 pl-2">
          <img src="./assets/img/mpesa.png" class="mr-3" height="75" />
         
        </div>
        <div class="media mt-3 pl-2" >

            <form class="row g-3" action="" method="POST">
            
                <div class="col-12">
                  <label for="amount" class="form-label">Amount</label>
                  <input type="text" class="form-control" name="amount" placeholder="e.g 10,000" required>
                </div>
                <div class="col-12">
                  <label for="contact" class="form-label" >Phone Number</label>
                  <input type="text" class="form-control" name="phone"  placeholder="e.g 07123*****" required>
                </div>
             
                <div class="col-12">
                  <button type="submit" class="btn btn-success" name="submit" value="submit">Send </button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  
  </body>
</html>
