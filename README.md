# Fake News

<img src="https://media.giphy.com/media/l3q2PMwmOGtezj8s0/giphy.gif" width="100%">


## About
A PHP-assignment in which I've created a fake news site containing 10 articles written by 5 different authors. 


## Instructions
Clone or fork the project.
<br>
Navigate to the root of this directory in your terminal of choice.
<br>
Start a localhost server from your command line.
<br>
    ```
    "php -S localhost:8000"
    ```
<br>
Launch the website with your localhost server in your preferred browser. 

## Built with 

* PHP
* HTML
* CSS

## Author


* **Moa Berg** 

## Testers

* Emil Pettersson
* Dante Mogrim


## License

This project is licensed under the MIT-license. Check out the LICENSE-file to read more.

## Comments from Jakob Gustafsson 

- The whole project has a very good structure and it's very easy to navigate through. Great choice to put the CSS-files into their own folder, and to divide the header/index/footer into their own respective PHP-file.
- The news feed itself looks very clean and proper. A big plus is that you've added unique pages for every article. The sidebar navigation for all the articles is a great addition. 
- `index.php:35` and `post.php:28-31` - Try adding onclick="return false;" to your '<a>-tags' for the like button and social media buttons, to prevent the page to load index.php and go back to the top of your website when clicked. As they are fake links in this case.
- `index.php:28` - The article cards are all clickable links, which makes it hard to mark and copy the content text. Even though this may be working in favour of this kind of news feed. Try to make only the image and title into links and see what you think?
- A really minor thing is to add a .gitignore with .DS_Store inside it to have it not appear in your repository.
