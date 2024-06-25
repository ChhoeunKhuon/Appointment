<main style="width:1000px;margin:5rem auto;box-shadow:0 0 15px rgba(0,0,0,0.25);padding:20px;border-radius:6px;border:none;">

<?php

// Class definition
class PatientApp {
    // Properties
    public int $id;
    public string $fname;
    public string $lname;
    public string $gender;
    public string $email;
    public string $phone;
    public bool $isLoggedIn = false; // Default value for logged-in status

    // Constructor
    public function __construct($id, $fname, $lname, $gender, $email, $phone) {
        $this->id = $id;
        $this->email = $email;
        $this->firstName = $fname;
        $this->lastName = $lname;
        $this->gender = $gender;
        $this->phone = $phone;
        $this->isLoggedIn = true; // Assuming constructor is called after successful login
        $this->_setSession();
    }
}
?>

</main>
