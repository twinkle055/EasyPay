<?php

class Subscribe {

  private $con;
	private $id;
  private $title;

	public function __construct($con, $id) {
    $this->con = $con;
		$this->id = $id;

    $query = mysqli_query($this->con, "SELECT * FROM subscriptions WHERE subscribeId='$this->id'");
    $subscribe = mysqli_fetch_array($query);

    $this->title = $subscribe['subscriptionName'];
	}

  public function getTitle() {
    return $this->title;
  }

}

?>
