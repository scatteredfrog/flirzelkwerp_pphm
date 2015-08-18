<?php
    ini_set("max_input_time",600);
    ini_set("max_execution_time",600);
    ini_set("upload_max_filesize","2048M");
    ini_set("post_max_size","2048M");
?>
<?php
class fabForm {
    private $email;
    private $subject;
    private $body;
    private $from;
    private $headers;

    // SET methods
    public function setEmail($emailAddress) {
        $this->email=$emailAddress;
    }
    
    public function setSubject($subjectLine) {
        $this->subject=$subjectLine;
    }
    
    public function setBody($bodyText) {
        $this->body=$bodyText;
    }
    
    public function setHeaders($sizeHeaders) {
        $this->headers=$sizeHeaders;
    }
    
    public function setFrom($whoFrom) {
        $this->from="From:".$whoFrom."\n".$this->headers;
    }
    
    // ACCESSOR METHODS
    public function getEmail() {
        return $this->email;
    }
    
    public function getSubject() {
        return $this->subject;
    }
    
    public function getBody() {
        return $this->body;
    }
    
    public function getHeaders() {
        return $this->headers;
    }
    
    public function getFrom() {
        return $this->from;
    }
    
    public function sendMail($sendHere) {
        if (mail(
                $sendHere,
                stripslashes($this->getSubject()),
                stripslashes($this->getBody()),
                $this->getFrom()
                )
           )
            echo("<p>Your request has been sent.</P>");
        else
            echo("<p>Due to technical difficulties, your request could not be delivered.</p>");
    }
}
?>
