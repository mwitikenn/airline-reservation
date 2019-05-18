function confirmCancel_id(customer_id)
{
     if(confirm('Do you really want to cancel the booking?'))
     {
        window.location.href='cancel_booking.php?customer_id=';
		return true;
		
     }else{
		 alert("not cancelled");
		return false;
	 }
}