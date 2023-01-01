	 _______________________________________________________
	| ___  ___ ___  ___ ___ ___ ___ _____ ___ ___  _  _		| 
	||   \| __/ __|/ __| _ \_ _| _ \_   _|_ _/ _ \| \| |	|
	|| |) | _|\__ \ (__|   /| ||  _/ | |  | | (_) | .` |	|
	||___/|___|___/\___|_|_\___|_|   |_| |___\___/|_|\_|	|
	|_______________________________________________________|
	                                                    
	THIS PROJECT IS A WORKING VERSION WEBAPPLICATION WITH A FRONTEND API, MVC DESIGN PATTERN AND DATABASE.
	THE DATABASE IS SETUP TO RUN PHP ON LOCALHOST:8081 BUT CAN BE SETUP WITH AN ONLINE DATABASE. THE MVC
	WHICH HANDLES FRONTEND REQUESTS	IS HOSTED ON LOCALHOST:8080.
	THE FRONTEND HAS A SOCIAL MEDIA SETUP WITH HEAVY INSPIRATION FROM INSTAGRAM. ONLY CORE FUNCTIONALITY 
	IS IMPLEMENTED, THIS INCLUDES:
 
 		LOGIN SYSTEM WITH USER REGISTRATION AND FRONTEND WITH LOGGED IN DETECTION.

 		POST SYSTEM WITH FRONTEND HOME PAGE & UPLOAD PAGE. INCLUDES FRONTEND IMAGE API.

 		PROFILE SYSTEM AND FRONTEND PROFILES API.



	 _______________________________________
	|   ___ ___  _  _ _____ ___ _  _ _____ 	|
	|  / __/ _ \| \| |_   _| __| \| |_   _|	|
	| | (_| (_) | .` | | | | _|| .` | | |  	|
	|  \___\___/|_|\_| |_| |___|_|\_| |_|  	|
	|_______________________________________|
                                    
	THE ZIP FOLDER CONTAINs THE FOLLOWING 4 ITEMS:
		README.TXT
		DBADMIN FOLDER
		MVC FOLDER
	-------------------------------------------------------------------------------------------

	WHEN THE SERVERS ARE STARTED OPEN LOCALHOST:8080 IN A BROWSER WINDOW. 

	A USER MUST BE REGISTERED BEFORE LOGGING IN WORKS.

	REGISTER A USER & LOG IN.

	WHEN LOGGED IN A NAVIGATION BAR BECOMES AVAILABLE WITH THE FOLLOWING MENU POINTS:

		MENU POINT	SYMBOL				DESCRIPTION
	-------------------------------------------------------------------------------------------
 		HOME		HOUSE SYMBOL		DISPLAYS THE FRONTPAGE WITH A SCROLLABLE FEED OF POSTS

		USERLIST	GROUP OF PEOPLE 	DISPLAYS A DATABASE TABLE OF ALL POSTS INFORMATION

		IMAGELIST	IMAGESTACK			DISPLAYS A DATABASE TABLE OF ALL POSTS INFORMATION

		UPLOAD		PLUS IN SQUARE		DISPLAYS THE UPLOAD PAGE WITH A PREVIEW POST

		PROFILE		PROFILE PICTURE		DISPLAYS YOUR PROFILE WITH USERNAME AND YOUR POSTS

		LOGOUT		N/A					LOGS YOU OUT AND DISPLAYS THE LOGIN PAGE

	 ___________________________________________________________
	|   ___ ___  _  _ _____ ___ _  _ _____   _____ ___ ___ ___	|
	|  / __/ _ \| \| |_   _| __| \| |_   _| |_   _| _ \ __| __|	|
	| | (_| (_) | .` | | | | _|| .` | | |     | | |   / _|| _|	|
	|  \___\___/|_|\_| |_| |___|_|\_| |_|     |_| |_|_\___|___|	|
    |___________________________________________________________|	 
	
	LOCATION								DESCRIPTION
	-------------------------------------------------------------------------------------------
	MVCProject								<<MAIN FOLDER>>
	| 
	|
	+---README.txt 							THIS DOCUMENT
	|
	|      
	+---dbadmin
	|       dbconfig.php 					DATABSE CONFIG FILE
	|       index.php 						INDEX PAGE FOR DATABASE
	|       startDB.bat						STARTS UP PHP ON LOCALHOST:8081
	|
	\---mvc
	    |   .DS_Store
	    |   .htaccess			
	    |   index.php						FIRST PAGE LOADED. STARTS SESSIONS AND ROUTER. LOADS INIT.PHP IN APP FOLDER	
	    |   StartMVC.bat					STARTS UP PHP ON LOCALHOST:8080
	    |
	    +---app
	    |   |   init.php					LOADS CORE MVC ELEMENTS
	    |   |
	    |   +---controllers					<<CONTROLLERS FOLDER>>
	    |   |       ApiController.php		CONTROLS API CALLS
	    |   |       HomeController.php		ALWAYS REROUTES TO INDEX IF LOGGED IN, SHOWS LOGIN PAGE IF NOT.
	    |   |       ImageController.php		CONTROLS IMAGE RELATED CALLS
	    |   |       UserController.php		CONTROLS USER RELATED CALLS
	    |   |
	    |   +---core						<<MVC CORE ELEMENTS>>
	    |   |       Controller.php			CONTROLS FRONTEND VIEWS, DATABASE MODELS & SERVICES
	    |   |       Database.php			BASE CLASS FOR ALL MODELS. HANDLES DATABASE CALLS.
	    |   |       db_config.php			CONFIG FILE FOR CONNECTING TO DATABASE. CONTAINS DATABASE USERNAME AND PASSWORD INFORMATION.
	    |   |       Router.php				IDENTIFIES CORRECT CONTROLLER THROUGH WEBSITE URL FOR REROUTING CONTROL  
	    |   |
	    |   +---models						<<MODELS FOLDER>>
	    |   |       Home.php				EXAMPLE HOME MODEL 
	    |   |       Image.php				HANDLES ALL DATABASE CALLS TO THE IMG TABLE
	    |   |       User.php				HANDLES ALL DATABASE CALLS TO THE USER TABLE
	    |   |
	    |   +---services					<<SERVICE FOLDER>>
	    |   |       DogService.php			EXTERNAL API CALL EXAMPLE
	    |   |       MathService.php			INTERNAL SERVICE EXAMPLE
	    |   |
	    |   \---views						<<VIEWS FOLDER>> 
	    |       |   template.php			TEMPLATE PAGE FOR VIEW. LOADED WITH ALL PAGES.
	    |       |
	    |       +---home
	    |       |       index.php			HOME PAGE. DISPLAYS POST FEED.
	    |       |
	    |       +---image
	    |       |       img.php				POST VIEW TEMPLATE FOR VIEWING INDIVIDUAL POST
	    |       |       table.php			DATA TABLE VIEW FOR IMAGE DATABASE
	    |       |       upload.php			UPLOAD VIEW
	    |       |
	    |       +---partials		
	    |       |       footer.php			FOOTER ELEMENT FOR TEMPLATE PAGE
	    |       |       head.php			HEAD ELEMENT FOR TEMPLATE PAGE
	    |       |       menu.php			MENU ELEMENT FOR TEMPLATE PAGE
	    |       |       post.php			POST TEMPLATE
	    |       |       profile.php			FRONTPAGE PROFILE ELEMENT TEMPLATE
	    |       |
	    |       \---user
	    |               login.php			LOGIN PAGE VIEW
	    |               profile.php			PROFILE PAGE VIEW
	    |               Registration.php	REGISTRATION PAGE VIEW
	    |               table.php			DATA TABLE VIEW FOR USER DATABASE
	    |
	    +---install
	    |       migrations.sql 				SQL FILE FOR DATABASE SETUP !!RUN THIS IN HEIDISQL OR OTHER DATABASE CLIENT
	    |
	    \---public
	        +---assets
	        |       avatar.png				PROFILE PIC PLACEHOLDER
	        |       fish.jpg	
	        |
	        +---css
	        |       style.css				MAIN STYLESHEET
	        |
	        \---js
	                scripts.js				MAIN JAVASCRIPT 

	 _______________________________________________________________
	|	 ___ ___ ___  _   _ ___ ___ ___ __  __ ___ _  _ _____ ___ 	|
	|	| _ \ __/ _ \| | | |_ _| _ \ __|  \/  | __| \| |_   _/ __|	|
	|	|   / _| (_) | |_| || ||   / _|| |\/| | _|| .` | | | \__ \	|
	|	|_|_\___\__\_\\___/|___|_|_\___|_|  |_|___|_|\_| |_| |___/	|
    |_______________________________________________________________|                                                      
	-------------------------------------------------------------------------------------------
	PHP 8.2: https://www.php.net/downloads.php 

	MUST BE INSTALLED ON C:/ AND PATH REREFENCED IN ENVIRONMENT VARIABLES
	-------------------------------------------------------------------------------------------

	HEIDISQL: https://www.heidisql.com/

	REMEMBER USERNAME AND PASSWORD!

	-------------------------------------------------------------------------------------------

	 _______________________________
	|	 ___ ___ _____ _   _ ___	|
	|	/ __| __|_   _| | | | _ \	|
	|	\__ \ _|  | | | |_| |  _/	|
	|	|___/___| |_|  \___/|_|		|
    |_______________________________|

	CREATE DATABASE
	-------------------------------------------------------------------------------------------

	1. OPEN DATABASE CLIENT SUCH AS HEIDISQL

	2. LOG IN TO LOCALHOST OR 127.0.0.1 WITH USERNAME AND PASSWORD FROM INSTALLATION (TYPICALLY USERNAME = ROOT, PASSWORD = ROOT)

	3. EXTRACT SQL

	4. LOCATE MVC/INSTALL/MIGRATIONS.SQL

	5. EXECUTE SQL

	6. CHECK IF DATABASE NAMED MVC WAS CREATED WITH TWO TABLES (IMG & USER)	

	FOR MORE INFO ON KEYS IN TABLES OPEN THE MIGRATIONS.SQL FILE IN EDITOR PROGRAM.


	START SERVERS
	-------------------------------------------------------------------------------------------
	7. LOCATE STARTDB.BAT FILE IN MVCPROJECT/DBAMIN/ & CLICK IT. WILL START PHP IN THE FOLDER.

	8. LOCATE STARTMVC.BAT FILE IN MVCPROJECT/MVC/ & CLICK IT. WILL START PHP IN THE FOLDER.

	9. ACCESS LOCALHOST:8080 ON A BROWSER FOR FRONTEND

	10. ACCESS LOCALHOST:8081 ON A BROWSER FOR DATABASE

	FOR DATABASE CONFIG FILES FOR LOCALHOST:8081 FIND DBADMIN/DBCONFIG.PHP. 
	THIS CONTAINS THE INFORMATION FOR CONNECTING DBADMIN/INDEX.PHP TO THE DATABASE

	FOR DATABASE CONFIG FILES FOR LOCALHOST:8080 MVC/APP/CORE/DBCONFIG.PHP. 
	THIS CONTAINS INFORMATION FOR CONNECTING MVC TO DATABASE

	 ___________________________________________
	|	 _   _ ___ _      _    ___ ___ _____	|
	|	| | | | _ \ |    | |  |_ _/ __|_   _|	|
	|	| |_| |   / |__  | |__ | |\__ \ | |		|
	|	 \___/|_|_\____| |____|___|___/ |_|		|
	|___________________________________________|

	URL												DESCRIPTION												
	-------------------------------------------------------------------------------------------
	INDEX
	localhost:8080/home								SHOWS FRONT PAGE		
	
	USER RELATED
	localhost:8080/user/login 						SHOWS LOGIN PAGE
	localhost:8080/user/register 					SHOWS REGISTRATION PAGE
	localhost:8080/user/<USERNAME> Profile page 	SHOWS PROFILE PAGE WITH GIVEN ID
	localhost:8080/user/userlist 					SHOWS USER DATA TABLE PAGE
	localhost:8080/user/logout						UNSETS THE SESSION
	
	IMAGE RELATED
	localhost:8080/image/<IMAGE_ID> 				SHOWS POST WITH GIVEN ID
	localhost:8080/image/upload 					SHOWS UPLOAD PAGE WITH PREVIEW POST
	localhost:8080/image/all_userimages/<USERNAME> 	SHOWS FEED OF GIVEN USER'S POSTS
	localhost:8080/image/imagelist 					SHOWS IMAGE DATA TABLE PAGE
	
	API CALLS
	localhost:8080/api/user/<USERNAME> 				API CALL TO SHOW GIVEN USER INFO
	localhost:8080/api/users 						API CALL TO SHOW ALL USERS
	localhost:8080/api/image/<IMAGE_ID> 			API CALL TO SHOW GIVEN IMAGE INFO
	localhost:8080/api/images/ 						API CALL TO SHOW ALL IMAGES
	localhost:8080/api/all_userimages/<USERNAME> 	API CALL TO SHOW ALL POSTS FROM GIVEN USER

	 ___________________________________________
	|	 ___ ___ ___ _   _ ___ ___ _______   __	|
	|	/ __| __/ __| | | | _ \_ _|_   _\ \ / /	|
	|	\__ \ _| (__| |_| |   /| |  | |  \ V /	|
	|	|___/___\___|\___/|_|_\___| |_|   |_|	|
	|___________________________________________|
	
	THE SETUP IS PROTECTED AGAINST XSS & SQL INJECTION WITH THE MVC
	
	USER REGISTRATION ALSO REQUIRES A REGEX ON BOTH FRONTEND AND BACKEND.
	
	REGISTERED PASSWORDS ARE HASHED BEFORE INSERT INTO DATABASE.

	 _______________________________________________________________
	|	 _  ___  _  _____      ___  _   ___ ___ ___  ___  ___  ___	|
	|	| |/ / \| |/ _ \ \    / / \| | | __| _ \ _ \/ _ \| _ \/ __|	|
	|	| ' <| .` | (_) \ \/\/ /| .` | | _||   /   / (_) |   /\__ \	|
	|	|_|\_\_|\_|\___/ \_/\_/ |_|\_| |___|_|_\_|_\\___/|_|_\|___/	|                                                            
	|_______________________________________________________________|

	IMAGE ACCEPTANCE SET ON FRONTEND BUT NO CHECK ON BACKEND FOR FILE TYPE. 
	CAN ALSO BE SET TO ALL FILES ON FRONTEND.
	
	NO AJAX CALL. COULD NOT FIGURE OUT HOW TO SECURE.




