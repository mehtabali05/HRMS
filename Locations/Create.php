<?php require_once '../Templates/Header.php'; ?>

<?php
    require_once '../Public/Locations.php';

    $loc = new Locations(); 

    if (isset($_POST['submit'])) {
        $loc_id =  (int)$_POST['loc_id'];
        $street_add = $_POST['street_add'];
        $postal_code = $_POST['postal_code'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $country_id = $_POST['country_id'];
        $result = $loc->create($loc_id,$street_add,$postal_code,$city,$province,$country_id);
        if ($result) {
            header('location:../Views/Location.php');
            exit();
        } else {
            echo '<p class="container bg-danger text-center text-light">Failed TO Store<p>';
        }
    }

?>

<div class="container-fluid my-3">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="" method="post">

                <div class="mb-3">
                    <label for="" class="form-label">Location ID</label>
                    <input
                        type="text"
                        class="form-control"
                        name="loc_id"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Location ID" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Street Address</label>
                    <input
                        type="text"
                        class="form-control"
                        name="street_add"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Street Address" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Postal Code</label>
                    <input
                        type="text"
                        class="form-control"
                        name="postal_code"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter Postal Code" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">City</label>
                    <input
                        type="text"
                        class="form-control"
                        name="city"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter City Name" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">State Province</label>
                    <input
                        type="text"
                        class="form-control"
                        name="province"
                        required
                        aria-describedby="helpId"
                        placeholder="Enter State Province" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Country ID</label>
                    <select
                        class="form-select form-select-lg"
                        name="country_id"
                        required
                        id="">
                        <option value="" selected disabled>Select one</option>

                        <?php
                                require_once '../Public/Countries.php';
                                $country = new Countries();
                            $result = $country->read();
                            while($row = $result->fetch_assoc())
                            {
                                echo '
                                        <option value='.$row['country_id'].'>'.$row['country_id'].'</option> 
                                ';
                            }
                        ?>
                        
                    </select>
                </div>

                <div>
                    <input type="submit" name="submit" value="Add Location" class="btn btn-success text-center text-light">
                </div>

            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../Templates/Footer.php'; ?>