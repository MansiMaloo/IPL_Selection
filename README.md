# IPL_Selection
A code to select Ipl team ,corresponding memeber using ajax
INFORMATION ABOUT THE FILES:

1."db.php"
	>This contains code for establishing database connectivity.
	>No direct access is provided to this file.
	>It is included in other files for mysql queries.

2."index.php"
	>It contains the fields for selecting the ipl team.
	>Each field is displayed after the previous one is selected.
	>In case the user changes mind and selects different team,the select memeber option also changes accordingly.
	>The user who has already chosen a team cannot do so again using same email id.
	>There is a validation check for mail id.
	>After selecting the values and clicking on the submit button,a summarized view of the entries chosen is displayed.

3."get.php"
	>It contains the code to be executed as per the ajax call,i.e. when a different team is selected,the team members automatically gets change.

4."style.css"
	>This contains the code for the styling of the page index.php.
