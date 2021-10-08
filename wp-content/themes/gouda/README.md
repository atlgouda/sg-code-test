# Submission updates from Gouda

Access site locally using:

    http://localhost:8888/mySite
    
I included all of the parent folders in case any information was needed to run locally.  Below are some screenshots in case there are any issues with running the dynamic content I added on your computer:

### Header added using dynamic_sidebars for header-1, header-end, current-day, and current-time
![Screen Shot 2021-10-05 at 9 14 52 AM](https://user-images.githubusercontent.com/40610980/136044519-38c78d7c-e036-454d-ab62-2fdf4aa08f29.png)
![image](https://user-images.githubusercontent.com/40610980/136045846-5075ed51-ee9e-4832-baf6-d3610d3d08e2.png)

**(Additional CSS classes added using widget block setting)**

![image](https://user-images.githubusercontent.com/40610980/136046127-56316eb4-bfee-472a-b922-1a6155cc3fd6.png)

---

### about-copy added with widget
![Screen Shot 2021-10-05 at 9 15 04 AM](https://user-images.githubusercontent.com/40610980/136044638-6bda97c8-51c6-48b3-800c-f0f01a1c92f7.png)

---

### services list limited to 14 using css:
    ul li:nth-of-type(1n+15) {
    display: none;
      }
### Added 16 list items to widget to test
![image](https://user-images.githubusercontent.com/40610980/136046413-1803a364-d735-42d4-aa6b-79ba7926b824.png)
![image](https://user-images.githubusercontent.com/40610980/136046832-72d9281c-280f-447c-a2b6-ddab9fb00de6.png)
![Screen Shot 2021-10-05 at 9 15 49 AM](https://user-images.githubusercontent.com/40610980/136044662-4c245c8d-67f4-4d45-afe5-3a05893c1919.png)

---

### Linked work list gallery to media files to acheive light-box effect
![image](https://user-images.githubusercontent.com/40610980/136047839-5b58e19c-d510-46df-9fed-977b29b34a15.png)



---

### Bio List - Added CSS classes to override styles in given code
![Screen Shot 2021-10-05 at 9 16 27 AM](https://user-images.githubusercontent.com/40610980/136044692-cee35174-0daf-40e1-9e7a-965bcd46cb0d.png)

---

### Footer with link to Blog Page
![Screen Shot 2021-10-05 at 9 16 42 AM](https://user-images.githubusercontent.com/40610980/136044929-304e0606-d11c-4a3c-a4fd-6540d920a505.png)

---

### Blog Page contet pulled from dynamically added page
![Screen Shot 2021-10-05 at 9 17 21 AM](https://user-images.githubusercontent.com/40610980/136044953-bc6d4a02-73b7-4027-a81c-07167b724b15.png)


# Welcome to the Studio Gradients Wordpress Test


Clone this repo which is a simplified version of the Studio Gradients site

You shouldn’t need to install anything. If you need to make changes to any of the style components, run `sass --watch main.scss main.css --style compressed`, and all images can be found in the `img` folder.

The goal of this test is to replicate the current site while integrating with Wordpress. Ultimately, we are testing your knowledge of Wordpress or your ability to learn it. If styles get messed up in the process, that is okay. If you want to reuse some images for ease, that is also okay.

Test Items:
<ol>
  <li>
    <p>Header items dynamically added</p>
    <ul>
      <li>Logo [img]</li>
      <li>Written copy [img]</li>
      <li>Day title [img]</li>
      <li>Time title [img]</li>
    </ul>
  </li>
  <li>
    <p>Hero copy added with wysiwyg</p>
    <ul>
      <li>Hero about copy [wysiwyg]</li>
    </ul>
  </li>
  <li>
    <p>Services</p>
    <ul>
      <li>Create a dynamic list of services that can be added to but limit the number of items to 14 [list]</li>
      <li>Dynamic link (copy + URL)[anchor]</li>
    </ul>
  </li>
  <li>
    <p>Work</p>
    <ul>
      <li>Our work section takes two images for each item. A hi-res image and a lower-res one. Set this up so all content can be uploaded via WP. (This section has been modified to 10 items. Put in at least 3 items)</li>
    </ul>
  </li>
  <li>
    <p>Bio List (create at least 2 bios with all fields required)</p>
    <ul>
      <li>Image [img]</li>
      <li>Name</li>
      <li>A nested list with at least 2 items (ie Favorite Show & Signs).</li>
    </ul>
  </li>
  <li>
    <p>Blog</p>
    <ul>
      <li>Create a basic non homepage template that can be accessed via a link in the footer</li>
      <li>Carry header + footer over to this page</li>
    </ul>
  </li>
</ol>  
  
