# SIMS-STUDENT_INFORMATION_MANAGEMENT_SYSTEM

ACKNOWLEDGEMENTS
We express our deep sense of gratitude to our respected and learned guide, Prof. Shweta Banerjee 
ma’am and Sulekha Das ma’am for their valuable help and guidance. We are thankful to them for the 
encouragement they had given us in completing the project.
We are also grateful to respected Head of the CSE Department Prof. Abhijit Chowdhury sir for 
permitting us to utilize all the necessary facilities of the institution.
Special Thanks to Prof. Samik Datta sir for the overall help and Prof. Sujit Raha sir for helping us on 
database related issues. 
We are also thankful to all the other faculty & staff members of our department for their kind cooperation and help.
Lastly, we would like to express our deep apperception towards our classmates and our indebtedness to 
our parents for providing us the moral support and encouragement.
1
 CONTENT
1. INTRODUCTION 1 – 6
i. Problem Definition
ii. Objectives
iii. Project Category
iv. Why Mobile Application and website for Student Information System
v. Hardware Specifications
vi. Software Specifications
2. SYSTEM ANALYSIS AND DESIGN 7 – 12
i. Requirement Specifications
ii. Flowcharts – DFDs and ERD
3. METHODOLOGY 13
4. SCREENSHOTS OF BETA VERSION 14 – 18
5. FUTURE SCOPE 19
6. CONCLUSION 19
7. REFERENCES 20
2
 INTRODUCTION
 Problem Definition
In this era of technological development, having a mobile application to help a student cope up with all his 
college progress, courses, notices & updates and use the same application for maintaining and keeping track 
of all necessary and relevantstudent information by the institution can be of great ease. It helps, accuracy and 
zero data redundancy.
Students require a great deal of information from colleges such as admission notices, timetables, events 
details, assessments etc. Currently, this information is provided to students through college website. The 
information present on website is generic, pertaining to large group of students and other stakeholders. For 
instance, the notices displayed on websites are not only specific to students, but, notices for teachers, staff 
members and general public are also provided through the website.
Moreover, the attendance and assessment records displayed on websites are consolidated lists containing 
information of all the students of a particular course/class. Timetables are also provided for all courses. This 
approach lacks personal touch.
Students have to extract their own information from website by navigating through various links or applying 
many filters/ search criteria. Many students face difficulty in doing so, which results in delivering 
incomplete or inaccurate information and thus lead to student dissatisfaction. Students are the key 
stakeholders for any educational institution. In today’s competitive environment those educational 
institutions flourish which develop significant relationship with their students.
An information system which can provide individualized services to students by use of latest technology 
can increase popularity of institution [1].
Nowadays, students expect to satisfy their information needs immediately. Rather than “going to get” 
needed information, undergraduate students are accustomed to instant information access [3]. In recent
years, mobile devices have become very popular among student community [2]. Using mobile technology, 
the information can travel to the student in a fast, personalized, accurate and convenient way. The 
dependency of students on mobiles has resulted in availability of different kinds of mobile apps that provide 
information which is custom tailored to student’s needs. Major International universities provide their apps 
to students for catering to their information requirements [4]. The apps have a student-centric focus which 
improves the student’s satisfaction with college services [8]. In this paper, we propose architecture for 
development of such mobile apps by reusing the existing infrastructure of Institution. As a proof of concept 
of our proposed design we hereby present an android based app- SIMS (STUDENT INFORMATION
& MANAGEMENT SYSTEM) developed for the students of Techno Engineering College Banipur [5]. 
SIMS empowers student by providing them with relevant personalized information anywhere anytime.
It also provides analysis to the students related to their attendance and assessment.
3
OBJECTIVES
Students require lot of information from colleges such as admission notices, timetables, events details etc. 
Currently information is distributed to students in two ways. In traditional approach, notices are displayed 
on physical notice boards of college which students check on regular basis. It leads to over-crowded notice 
board areas. Students cannot receive the information if they are not physically present in college. Moreover, 
it wastes lot of paper and time.[6].
Second approach is to provide information on college websites. Students may access website from 
anywhere. It does away with crowded notice boards and promotes paperless information dissemination. 
But, the major challenge in obtaining information from website is that it provides collective information 
pertaining to large groups of students. The onus of filtering the personalized information and performing 
calculations to do analysis is on the students. For instance, when the monthly attendance ofstudents is 
uploaded on the website, several issues may arise in identifying individualized information. To find their 
attendance, students have to look for all the lists submitted by different teachers. Students then search their 
own attendance from these lists and perform mathematical calculations to obtain their consolidated 
attendance. This task is performed for all the papers for different subjects. This is a tedious job and is error
prone too [7].
4
PROJECT CATEGORY
This application is basically a client server-based application system that means though having users’
interaction and input-output conversation, yet it will be operated from any machine, which are attached with 
the server. Basically, it will maintain a server-based communication and exchange ideas and also, they can 
receive services from every corner of the organization. Any type of response can generate on the real time 
basis, i.e., instantly the user can get their answers against various queries.
There are various features in which a project can be categorized. The proposed project has been divided into 
three main categories, which can be described as:
Front – end: -
The front-end tool of this proposed project is Visual Basic.net. Visual Studio is a complete suite of tools 
for building desktop applications. In addition to building high-performing desktop applications, we can 
use Visual Studio's powerful component-based development tools and other technologies to simplify teambased design, development, and deployment of Enterprise solutions.
Back – end: -
The back end of the project is supported by SQL Server. 
SQL Server -SQL Query Analyzer is a graphical tool that allows us to: 
❖ Create queries and other SQL scripts and execute them against SQL Server databases. 
❖ Quickly create commonly used database objects from predefined scripts. 
❖ Quickly copy existing database objects. 
❖ Quickly insert, update, or delete rows in a table. (Open Table window)
5
Why Mobile Application and website for Student Information System
• Why Mobile Application?
❖ In traditional approach, Students cannot receive the information if they are not physically present in 
college. Moreover, it wastes lot of paper.
❖ The major challenge in obtaining information from website is that, it provides collective information 
to large groups of students.
❖ Students will have access to courses instantaneously from anywhere.
❖ Institution can publish notices, give updates or make announcements at any time and students can 
have access to the data instantaneously from anywhere.
❖ Using the application for taking attendance and keeping track of student progress will help get rid of 
human made errors.
❖ Managing library information and Accounts will be a piece of cake.
• Why Website?
❖ In professional fields all prefer website over applications, and they use Laptop/ Desktop instead of 
mobile phones.
❖ Would be easy to manage account section or library section rather than using applications, as they 
need to deal-with the large amount of student’s data.
❖ For long working sessions Website is more comfortable than applications, especially for aged 
persons.
❖ For huge amount of data-entry works Desktop/ laptop keyboards are more comfortable and 
optimized to type with more accuracy and in an efficient manner.
❖ Admins can manage students’ data by adding, updating, deleting them and students will have no 
access on that admin part.
❖ Publishing results , Fees structure, Study materials, information , holiday announcements , placement 
talks with a push notification option to the application will be very easy.
6
 SYSTEM REQUIREMENTS
Hardware Specifications for developing the application.
Operating System: Windows 10/11
RAM: 16 GB and higher
Memory: 40 GB – Free Space in the Installation Drive
Processor: Core i5 11th Gen CPU (2.5 GHz or Higher)
Graphics: GTX 1650 4 GB
Software Specifications for developing the application:
Java Development Kit 11 (JDK 11) must be installed in the system.
Android SDK – Android Studio and SDK tools.
Hardware Specifications to run the application:
Operating System: Android OS API level 19 (Version 4.4 KitKat and above)
RAM: 1 GB and higher
Processor: Any MediaTek / Qualcomm chipset.
Hardware Specifications for developing the Website.
Operating System: Windows 10/11
RAM: 4 GB and higher
Memory: 6 GB – Free Space in the Installation Drive
Processor: Core i3 10th Gen CPU (2.0 GHz or Higher)
Software Specifications for developing the Website:
SQL (Xampp server)
VS CODE
Hardware Specifications to run the Website:
Operating System: Windows 10/11 or lower.
RAM: 1 GB and higher
Processor: Core i3 10th Gen CPU (2.0 GHz or Higher) or lower.
Browser: Chrome, Firefox, Internet Explorer, Edge, Opera,
Brave, Chromium, Vivaldi, DuckDuckgo.
7
PLANNING & SCHEDULING
Gantt Chart: -
Depending on the working priorities, the entire project can be subdivided into the nine modules, those are: -
1.Index.
2.College Page.
3.Sign in/up page.
4.Admin Page.
5.Student Page.
6.Libraion Page.
7.Database Connection.
8.Data fetch from web.
9.Android Development.
The above mentioned data is just a reference, where we mentioned in how much
time the whole process could be done, but in real development process it took more 
than usual for us due to some error facing and solving them.
8
SYSTEM ANALYSIS AND DESIGN
Requirement Specifications
Android provides a rich application framework that allows you to build innovative apps and gamesfor mobile 
devices in a Java language environment. The documents listed in the left navigation provide details about 
how to build apps using Android's various APIs [4].
If you're new to Android development, it'simportant that you understand the following fundamental concepts 
about the Android app framework:
Apps provide multiple entry points
Android apps are built as a combination of distinct components that can be invoked individually. For 
instance, an individual activity provides a single screen for a user interface, and a service independently 
performs work in the background.
From one component you can start another component using an ‘intent’. You can even start a component in
a different app,such as an activity in a maps app to show an address. This model provides multiple entry points
for a single app and allows any app to behave as a user's "default" for an action that other apps may invoke
[2].
Apps adapt to different devices
Android provides an adaptive app framework that allows you to provide unique resources for different device
configurations. For example, you can create different XML layout files for different screen sizes and the 
system determines which layout to apply based on the current device's screen size [3].
You can query the availability of device features at runtime if any app features require specific hardware 
such as a camera. If necessary, you can also declare features your app requires so app markets such as Google 
Play Store do not allow installation on devices that do not support that feature [5]
