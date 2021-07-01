<h1  align="center">Travel And Tourism-Web-Technologies-Project</h1>
 <section>
<center>
<table align="center" >
                  <p  align="center"><img src="https://github.com/radwanromy/Three.js-WebGL-3D-website-project-By-A_S_M_Radwan/blob/master/aiub.png" class="w3-round"  align="center"></p>
                                                <h2  align="center">American International University- Bangladesh</h2>
<pre>
<h3 align="center">CSC 3222: Web Technologies</h3>
<h3 align="center">CO1.1 and CO2.1 Evaluation
Project Report</h3>
<h3 align="center">Summer 20-21</h3>
<h3 align="center">Project Title: Travel & Tourism</h3>
<h3 align="center">Section: A</h3>
<br>
<tr><td>
Student Name
</td>
<td>
 Student Id
</td></tr>
<tr><td>
	<a href="https://github.com/radwanromy" >A. S. M. Radwan</a>
</td>
<td>
18-36384-1
</td></tr>
<tr><td>
	<a href="https://github.com/Shethil" >Shethil Ahammed	</a>
</td>
<td>
  19-39698-1
</td></tr>
<tr><td>
	<a href="https://github.com/sadia-ety" >Sadia Afrin Ety  	</a>
</td>
<td>
19-39659-1
</td></tr>
<tr><td><a href="https://github.com/Pushon-19-39650-1" >Jeba Sadia Pushon    	</a>

</td>
<td>
	19-39650-1
</td></tr>
</table>
</center>
</section>
</pre>
<details>
<summary>
 Introduction
</summary>
 Modern life has become hectic, surrounded by so many 
responsibilities. Fulfilling those responsibilities life becomes 
monotonous. To restore energy and get sometime out of this 
gloomy, busy life people want to get lost in the serenity of 
mother-nature. Hence, they like to travel. But when it comes to 
travelling, there comes so many things to be considered –
which place to go, is it safe, how much time will it take to go, 
what are the available transport systems, are there any hotels 
to stay, how much do they cost, which are the tourist spots, etc. 
People want to go for travelling to be relieved from stress, but 
they become more stressed when planning for a tour. So, the 
main objective of our system is to give all the necessary 
information about the places and make necessary 
arrangements such as, transportations, hotel booking, rent-vehicles facilities to go around the places. Our goal is to ensure that 
the user doesn’t have to go through any hassle and enjoy their 
trip fully.
</details>
<details>
<summary>
Background Study
</summary>

This is a system to ease the planning of 
tour for a user. If a user is not already a member he needs to 
sign up, otherwise he signs in with his email and password. The 
system checks user’s email and password. If the email and 
password is correct then the user goes to the homepage of the 
system, otherwise the system prompt an error message saying, 
“Incorrect Password!” If a user forgets his password, he can
recover his password by clicking on “Forgot Password” section. 
An email with password recovery is sent to user’s email address 
by the system in order to retrieve the password. In the 
homepage, a user can search for a place by division or by 
popularity or by name. System provides the details of the place 
that user searched, with descriptions, photos and reviews by 
other users who already visited it. A user can mark the place as 
interested by tapping a star sign by the place name. This will 
help the user to get notified with new reviews or photos about 
the place. If a user want make a booking for a place of his 
choice, he can tap on the booking option and a new page for 
booking will pop up. In the booking page, a user can choose the 
time when he wants to visit the place, how many days will he 
stay there etc. A user needs to select a transport system which 
can a bus or a train or a private car or by air. Then he needs to 
select his preferable options to book a hotel either only rooms 
or rooms and foods. After fulfilling all the details a receipt 
showing costs will pop up. User can make the payment by 
online banking. 
</details>
<details>
<summary>
Requirement Analysis
</summary>
	<pre>


<details>
<summary>
User Category
</summary>



There are n-types of Users here. They are:

•	Customer\User Account,<br>
•	Travel Agency Admin, <br>
•	Hotel System Admin, and <br>
•	Vehicles Rental Service Provider.<br>
</details>

<details>
<summary>
Feature List
</summary>

<details>
<summary>
Customer\User Account
</summary>
	
In this project the “Customer\User Account” has the following features:
1)	Can sign up as a customer.
2)	Can login as a customer.
3)	Can see all of our facilities.
4)	Can buy tickets for travel.
5)	Can search places.
6)	Can contact with us using contact form.
7)	Can update their profile.
8)	Can show history.
9)	Can register for hotels according to level.
10)	Can register for hotel rooms based on duration.
11)	Can register for hotel room with many facilities or without. 
12)	Can rent vehicles. 
13)	Can see people’s ratings on specific places.
14)	Can rate their journey.
15)	Can log out from the system.

</details>

<details>
<summary>
Travel Agency Admin
</summary>

In this project the “Travel Agency Admin” has the following features:
1)	Can login as an admin.
2)	Can add new trip information along with the route.
3)	Can add travel period facilities.
4)	Can add seat details.
5)	Can perform customer registration to buy tickets.
6)	Can book seats for customers.
7)	Can check all customer details and their history.
8)	Can add employee to their system.
9)	Can see employee details.
10)	Can delete employee.
11)	Can set reservation.
12)	Can add trip seat info with customer details.
13)	Can remove customer information 
14)	Can see whole history of their customer with agency.
15)	Can log out of from the system.
</details>

<details>
<summary>
Hotel System Admin
</summary>
In this project the “Hotel System Admin” has the following features:<br><br>
1)	Can login as an admin.<br>
2)	Can add new hotels information.<br>
3)	Can add hotels according to level.<br>
4)	Can add rooms based on duration.<br>
5)	Can add room with many facilities or without. <br>
6)	Can set hotels in system according to place and levels.<br>
7)	Can perform customer registration.<br>
8)	Can check in customers to their hotel.<br>
9)	Can check out customers from their hotel.<br>
10)	Can check all customer details (In hotel customers and checkout customers).<br>
11)	Can add employee to their system.<br>
12)	Can see employee details.<br>
13)	Can delete employee.<br>
14)	Can see whole history of their customer in hotels.<br>
15)	Can log out from the system.<br>
</details>

<details>
<summary>
Vehicles Rental Service Provider
</summary>
In this project the “Vehicles Rental Service Provider” has the following features:<br><br>
1)	Can login as an admin.<br>
2)	Can add new vehicles information.<br>
3)	Can add seat information according to vehicles.<br>
4)	Can add vehicles facilities information.<br>
5)	Can perform customer registration to rent vehicles.<br>
6)	Can book vehicles for customers.<br>
7)	Can check all customer details and their history.<br>
8)	Can add employee to their system.<br>
9)	Can see employee details.<br>
10)	Can delete employee.<br>
11)	Can set reservation for rent.<br>
12)	Can add vehicles rent info with customer details.<br>
13)	Can remove customer information. <br>
14)	Can see whole history of their customer with agency.<br>
15)	Can log out of from the system.<br>
</details>
</details>
</details>
<details> 
<summary>
Design
</summary>

Draw an entity diagram of your project here. 
	
![fghfghfgh](https://user-images.githubusercontent.com/50805604/124064398-7b8fdb00-da56-11eb-85de-837778785729.png)
![Captsdefwarefewrfewrfewrferferure](https://user-images.githubusercontent.com/50805604/124064196-1cca6180-da56-11eb-8961-e094ebd09009.JPG)
![208586568_1490051264708872_2078800307963095179_n](https://user-images.githubusercontent.com/50805604/124064286-41bed480-da56-11eb-827f-1a434422b4e9.jpg)
![200208245_862814507693268_426094989368035440_n](https://user-images.githubusercontent.com/50805604/124064318-51d6b400-da56-11eb-8359-506a1c5e73b9.jpg)

</details>






<details>
<summary>
Tools Used
</summary>




To develop this project, we have used the following:<br>

•	Microsoft Word<br>
•	Smart Draw<br>
•	Snipping Tool<br>
•	PHP<br>
•	HTML<br>
•	Microsoft Word<br>
•	Smart Draw<br>
•	Snipping Tool<br>
•	Brackets<br>
•	Xampp<br>
•	VS code<br>
•	Microsoft Edge<br>
•	Chrome<br>
</details>

<details>
<summary>
System Images against the Specification
</summary>	
Give a screen shot of some GUIs (Midterm project) and write a very small description (Maximum 40 words) for each of the GUIs.

	![Captdcfsdfcadfcwsedfure](https://user-images.githubusercontent.com/50805604/124065421-9e22f380-da58-11eb-917e-bbce7268db0f.JPG)
![Captqwdergsrtghryhryghure](https://user-images.githubusercontent.com/50805604/124065433-a54a0180-da58-11eb-8e0a-71bdaa2d3619.JPG)
![Captdfgdfgdgedgure](https://user-images.githubusercontent.com/50805604/124065441-a8dd8880-da58-11eb-8335-999c86cea5e2.JPG)

	
</details>
<details>
<summary>
Impact of this Project
</summary>
With the evolving society and the increasing access to the internet nowadays it’s much easier and cost efficient to provide services to customers through different apps. Below are some of the crucial importance pointed out:<br>
1.	 Easy access for the customers<br>
2.	Easy account creation and online updates<br>
3.	Live travel advice<br>
4.	Receiving travel information online.<br>
5.	Secured services<br>
</details>
<details>
<summary>
Limitations and Possible Future Improvements
</summary>
	
Since we are at the beginning level so there are some limitation in our project.Those limitations will be accomplished over time.We can add
some features to improve our project.We can add some features for user like:<br>
1. Special offer <br>
2. Family package<br>
3. Single package <br>
4. Holiday plan<br>
<br>
We can add more details about toruism place & can improve our Home Page.We can open a suggestion section where user can suggested us their requirements,
We will review their suggestions & if their requirements are valid then we will work on this, By this we can improve our project in future.<br>

</details>


