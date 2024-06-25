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
        $this->firstName = $fname;
        $this->lastName = $lname;
        $this->gender = $gender;
        $this->email = $email;
        $this->phone = $phone;
        $this->isLoggedIn = true; // Assuming constructor is called after successful login
        $this->_setSession();
    }
}
?>