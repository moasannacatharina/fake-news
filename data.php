<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.

$authors = [
    ['name' => 'Maja Namnsson', 'id' => 1],
    ['name' => 'Olle Trens', 'id' => 2],
    ['name' => 'Moa Berg', 'id' => 3],
    ['name' => 'Kalle Trollsson', 'id' => 4],
    ['name' => 'Bo Berntsson', 'id' => 5]
];

$articles =
    [
        [
            'title' => 'Scientists Warn Gothenburg Will Be Under 6ft Of Snakes By 2022',
            'published_date' => '2020-10-19 04:55',
            'content' => "No wait, Doc, the bruise, the bruise on your head, I know how that happened, you told me the whole story. you were standing on your toilet and you were hanging a clock, and you fell, and you hit your head on the sink, and that's when you came up with the idea for the flux capacitor, which makes time travel possible. Ronald Reagon. Unfortunately no, it requires something with a little more kick, plutonium. My god, it's my mother. Put your pants back on. Who's are these?

                Now, of course not, Biff, now, I wouldn't want that to happen. Yeah. Alright, c'mon, I think we're safe. Einstein, hey Einstein, where's the Doc, boy, huh? Doc Oh.
            
                After I fell off my toilet, I drew this. Uh, yeah.<br> <br>Hey Marty, I'm not your answering service, but you're outside pouting about the car, Jennifer Parker called you twice. No, Marty, we've already agreed that having information about the future could be extremely dangerous. Even if your intentions are good, they could backfire drastically. Whatever you've got to tell me I'll find out through the natural course of time. Well, they're bigger than me.
            
                Quiet, quiet. I'm gonna read your thoughts. Let's see now, you've come from a great distance? Are you gonna order something, kid? My name's Lorraine, Lorraine Baines. My name's Lorraine, Lorraine Baines. No, why, what's a matter?
            
                Yeah well, I saw it on a rerun. Calvin, why do you keep calling me Calvin? Holy shit. I had a horrible nightmare, dreamed I went back in time, it was terrible. whoa, this is it, this is the part coming up, Doc.",
            'summary' => "No wait, Doc, the bruise, the bruise on your head, I know how that happened, you told me the whole story. you were standing on your toilet and you were hanging a clock.",
            'author_id' => 2,
            'id' => 1,
            'likes' => '❤️ 10',
            'img' => './img/martin-magnemyr-Xh1JNKQzg2Q-unsplash.jpg',
            'author' => 'Olle Trens',
        ],


        [
            'title' => '12 costume ideas for Halloween 2020 that make you say \'Meh\'',
            'published_date' => '2020-09-30 18:00',
            'content' => "Yogic harmful electromagnetic fields surrender kefir reprogramming your DNA, sound healing stevia. Optimal frequency macrobiotic closing circle, mayan calendar silent disco quantum mala beads. Soulmate sarong taurus reverse osmosis, perineum blessed organic patchouli. Talking stick moon cycle homeopathy awareness monogamish fractal nature of om, cosmic asana.

                Meditation hexayurt radiant trust the process, tincture consciousness hemp seed dakini stevia. Fluorescent lights emotional release crystal healing agave raw cacao seasonal wicca ponytail chi energy, mercury retrograde ganja. One taste biodiesel spoken word, tai chi as we honor om bentonite clay. Workshop saturn return spinal awareness Dr. Bronner's, karmic oneness embodied Bay Area craniosacral therapy. Apple cider vinegar the power of intention colloidal silver marinese non-attachment, change agent reproductive system essential oils heart-based honoring your truth. Lavender asana natural homebirth birth name harmony loving kindness, visualization practices gut flora. Cleansing yerba matte prayerformance himalayan sea salt, light energy infinite blessings new paradigm papyrus font cosmic. Namaste.",
            'summary' => "Since the world is falling apart, our priority has not been to come up with costume ideas for this Halloween season. However, here are some that might work out fine. We don't care.",
            'author_id' => 3,
            'id' => 2,
            'likes' => '❤️ 30',
            'img' => './img/darren-halstead-B_vXFdzvw3g-unsplash.jpg',
            'author' => 'Moa Berg',
        ],

        [
            'title' => 'Pop star eats hamster during live concert',
            'published_date' => '2020-09-10 12:10',
            'content' => "The very fact that you're aware of suffering is enough reason to be overjoyed that you're alive and can experience it. A big strong tree needs big strong roots. Maybe there's a happy little waterfall happening over here. See there how easy that is. And that's when it becomes fun - you don't have to spend your time thinking about what's happening - you just let it happen. Trees grow in all kinds of ways. They're not all perfectly straight. Not every limb is perfect.

                This is your world. In your world you can create anything you desire. If you've been in Alaska less than a year you're a Cheechako. You got your heavy coat out yet? It's getting colder. A tree needs to be your friend if you're going to paint him. It's all a game of angles.
                
                When you do it your way you can go anywhere you choose. Don't fiddle with it all day. Now we don't want him to get lonely, so we'll give him a little friend. Absolutely no pressure. You are just a whisper floating across a mountain. You need to have a very firm paint to do this. We'll throw some old gray clouds in here just sneaking around and having fun.
            
                You have to make these big decisions. The shadows are just like the highlights, but we're going in the opposite direction. There comes a nice little fluffer. A thin paint will stick to a thick paint. We'll put a happy little bush here.",
            'summary' => "The very fact that you're aware of suffering is enough reason to be overjoyed that you're alive and can experience it. A big strong tree needs big strong roots. Maybe there's a happy little waterfall happening over here.",
            'author_id' => 2,
            'id' => 3,
            'likes' => '❤️ 15',
            'img' => './img/austin-neill-hgO1wFPXl3I-unsplash.jpg',
            'author' => 'Olle Trens',

        ],

        [
            'title' => 'Horrified Nurses discover 40-pound baby after accidentally leaving it in incubator over weekend',
            'published_date' => '2020-08-02 14:20',
            'content' => "It's not enough, but it's helping. On the other end, we've heard my former pastor, Reverend Jeremiah Wright, use incendiary language to express views that have the potential not only to widen the racial divide, but views that denigrate both the greatness and the goodness of our nation; that rightly offend white and black alike.

                If you're working forty hours a week, you shouldn't be living in poverty. America does not presume to know what is best for everyone, just as we would not presume to pick the outcome of a peaceful election.
                
                Thank you, and God bless America.",
            'summary' => "It's not enough, but it's helping. On the other end, we've heard my former pastor, Reverend Jeremiah Wright, use incendiary language to express views that have the potential not only to widen the racial divide.",
            'author_id' => 1,
            'id' => 4,
            'likes' => '❤️ 12',
            'img' => './img/bermix-studio-yWYiNNK_tOI-unsplash.jpg',
            'author' => 'Maja Namnsson',
        ],

        [
            'title' => 'Scientists discover new breed of rats that walk upright',
            'published_date' => '2020-07-30 16:20',
            'content' => "We are going to make placeholder text great again. Greater than ever before. Lorem Ipsum's father was with Lee Harvey Oswald prior to Oswald's being, you know, shot. I will write some great placeholder text – and nobody writes better placeholder text than me, believe me – and I’ll write it very inexpensively. I will write some great, great text on your website’s Southern border, and I will make Google pay for that text. Mark my words.

                I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, are they really so different? Be careful, or I will spill the beans on your placeholder text.
                
                Lorem Ipsum best not make any more threats to your website. It will be met with fire and fury like the world has never seen. Lorem Ipsum best not make any more threats to your website. It will be met with fire and fury like the world has never seen.",
            'summary' => "We are going to make placeholder text great again. Greater than ever before. Lorem Ipsum's father was with Lee Harvey Oswald prior to Oswald's being.",
            'author_id' => 1,
            'id' => 5,
            'likes' => '❤️ 2',
            'img' => 'https://external-preview.redd.it/cdBX8iPcLH-sSlIrPH1IrYf8FbBBljiLb0GvWL4BAQE.jpg?auto=webp&s=63c17855d5c3c4cdc3c10eb66785be48f1ee8e80',
            'author' => 'Maja Namnsson',
        ],

        [
            'title' => 'World Bank says poor people need more money',
            'published_date' => '2020-07-01 22:10',
            'content' => "I'm baby hell of food truck post-ironic helvetica blue bottle church-key adaptogen distillery deep v cardigan. You probably haven't heard of them lumbersexual woke iceland 90's cronut, ugh mixtape. Glossier try-hard selvage, craft beer pug poke cronut kogi fashion axe cornhole chambray authentic. Art party tote bag wayfarers readymade hella deep v. Quinoa gentrify vaporware gochujang helvetica cronut activated charcoal farm-to-table edison bulb.

                Farm-to-table offal irony iPhone listicle migas subway tile banh mi skateboard waistcoat distillery live-edge. Craft beer microdosing literally subway tile taxidermy. Helvetica shoreditch hashtag narwhal, crucifix DIY chambray. Pabst freegan ennui, authentic lumbersexual raw denim sriracha you probably haven't heard of them glossier hexagon poke 8-bit photo booth mumblecore. Lo-fi retro irony authentic taxidermy neutra. Asymmetrical affogato neutra, four loko whatever etsy everyday carry deep v subway tile normcore vinyl. Mixtape sartorial disrupt cornhole subway tile enamel pin leggings post-ironic food truck schlitz four dollar toast freegan readymade.
                
                Squid literally yuccie narwhal copper mug af. Street art everyday carry trust fund biodiesel enamel pin normcore. Fixie XOXO kinfolk distillery irony next level, hoodie gastropub woke vice selfies messenger bag sartorial authentic. Pok pok before they sold out irony blue bottle glossier freegan. Master cleanse subway tile church-key salvia shabby chic yuccie.
            
            Slow-carb fashion axe chicharrones single-origin coffee prism deep v semiotics pour-over street art butcher echo park next level. Truffaut tofu quinoa portland, food truck schlitz hella tousled green juice XOXO polaroid jianbing chia umami. Helvetica wolf trust fund, hammock polaroid typewriter VHS. Brooklyn 90's sartorial, chicharrones organic vaporware yuccie quinoa succulents DIY meggings. Hella chillwave forage, iceland distillery edison bulb copper mug jean shorts shoreditch hell of. Hoodie aesthetic hammock, unicorn tilde sriracha typewriter mumblecore whatever food truck man braid copper mug hot chicken. Master cleanse aesthetic organic, fashion axe cardigan ramps crucifix vinyl meditation semiotics mumblecore air plant art party succulents.",
            'summary' => "We are going to make placeholder text great again. Greater than ever before. Lorem Ipsum's father was with Lee Harvey Oswald prior to Oswald's being",
            'author_id' => 3,
            'id' => 6,
            'likes' => '❤️ 129',
            'img' => './img/steve-knutson-lQ2BzDNmnHE-unsplash.jpg',
            'author' => 'Moa Berg',
        ],

        [
            'title' => 'Diana was still alive hours before she died',
            'published_date' => '2018-06-24 15:50',
            'content' => "Thestral dirigible plums, Viktor Krum hexed memory charm Animagus Invisibility Cloak three-headed Dog. Half-Blood Prince Invisibility Cloak cauldron cakes, hiya Harry! Basilisk venom Umbridge swiveling blue eye Levicorpus, nitwit blubber oddment tweak. Chasers Winky quills The Boy Who Lived bat spleens cupboard under the stairs flying motorcycle. Sirius Black Holyhead Harpies, you’ve got dirt on your nose. Floating candles Sir Cadogan The Sight three hoops disciplinary hearing. Grindlewald pig’s tail Sorcerer's Stone biting teacup. Side-along dragon-scale suits Filch 20 points, Mr. Potter.

                Prefect’s bathroom Trelawney veela squashy armchairs, SPEW: Gamp’s Elemental Law of Transfiguration. Magic Nagini bezoar, Hippogriffs Headless Hunt giant squid petrified. Beuxbatons flying half-blood revision schedule, Great Hall aurors Minerva McGonagall Polyjuice Potion. Restricted section the Burrow Wronski Feint gnomes, quidditch robes detention, chocolate frogs. Errol parchment knickerbocker glory Avada Kedavra Shell Cottage beaded bag portrait vulture-hat. Twin cores, Aragog crimson gargoyles, Room of Requirement counter-clockwise Shrieking Shack. Snivellus second floor bathrooms vanishing cabinet Wizard Chess, are you a witch or not?
                
                Alohamora wand elf parchment, Wingardium Leviosa hippogriff, house dementors betrayal. Holly, Snape centaur portkey ghost Hermione spell bezoar Scabbers. Peruvian-Night-Powder werewolf, Dobby pear-tickle half-moon-glasses, Knight-Bus. Padfoot snargaluff seeker: Hagrid broomstick mischief managed. Snitch Fluffy rock-cake, 9 ¾ dress robes I must not tell lies. Mudbloods yew pumpkin juice phials Ravenclaw’s Diadem 10 galleons Thieves Downfall. Ministry-of-Magic mimubulus mimbletonia Pigwidgeon knut phoenix feather other minister Azkaban. Hedwig Daily Prophet treacle tart full-moon Ollivanders You-Know-Who cursed. Fawkes maze raw-steak Voldemort Goblin Wars snitch Forbidden forest grindylows wool socks.",
            'summary' => "We are going to make placeholder text great again. Greater than ever before. Lorem Ipsum's father was with Lee Harvey Oswald prior to Oswald's being",
            'author_id' => 4,
            'id' => 7,
            'likes' => '❤️ 140',
            'img' => 'https://upload.wikimedia.org/wikipedia/commons/0/0b/Princess_Diana_-_Royal_Visit_to_Halifax%2C_Nova_Scotia_-_June_1983_%2837448879456%29.jpg',
            'author' => 'Kalle Trollsson',
        ],

        [
            'title' => 'A nuclear explosion would probably be bad',
            'published_date' => '2018-03-07 11:50',
            'content' => "When other websites give you text, they’re not sending the best. They’re not sending you, they’re sending words that have lots of problems and they’re bringing those problems with us. They’re bringing mistakes. They’re bringing misspellings. They’re typists… And some, I assume, are good words. You're telling the enemy exactly what you're going to do. No wonder you've been fighting Lorem Ipsum your entire adult life. If Trump Ipsum weren’t my own words, perhaps I’d be dating it. All of the words in Lorem Ipsum have flirted with me - consciously or unconsciously. That's to be expected.

                I don't think anybody knows it was Russia that wrote Lorem Ipsum, but I don't know, maybe it was. It could be Russia, but it could also be China. It could also be lots of other people. It also could be some wordsmith sitting on their bed that weights 400 pounds. Ok?
                
                Lorem Ipsum better hope that there are no \"tapes\" of our conversations before he starts leaking to the press! This placeholder text is gonna be HUGE.",
            'summary' => "We are going to make placeholder text great again. Greater than ever before. Lorem Ipsum's father was with Lee Harvey Oswald prior to Oswald's being",
            'author_id' => 4,
            'id' => 8,
            'likes' => '❤️ 14',
            'img' => './img/science-in-hd-MAoGpZ42NZM-unsplash.jpg',
            'author' => 'Kalle Trollsson',
        ],

        [
            'title' => 'Murderer says detective ruined his reputation',
            'published_date' => '2017-10-07 10:02',
            'content' => "There we go. A tree needs to be your friend if you're going to paint him. You're meant to have fun in life. There he comes. Isn't it great to do something you can't fail at?

                Isn't it fantastic that you can change your mind and create all these happy things? You don't have to spend all your time thinking about what you're doing, you just let it happen. We tell people sometimes: we're like drug dealers, come into town and get everybody absolutely addicted to painting. It doesn't take much to get you addicted. Now we can begin working on lots of happy little things. Any little thing can be your friend if you let it be.
                
                Trees live in your fan brush, but you have to scare them out. By now you should be quite happy about what's happening here. You have to make these big decisions. Let's make some happy little clouds in our world. Just use the old one inch brush.
                
                Don't fight it, use what happens. I'm a water fanatic. I love water. Use what you see, don't plan it. Volunteering your time; it pays you and your whole community fantastic dividends. Let's put some happy trees and bushes back in here. Just take out whatever you don't want. It'll change your entire perspective.",
            'summary' => "We are going to make placeholder text great again. Greater than ever before. Lorem Ipsum's father was with Lee Harvey Oswald prior to Oswald's being",
            'author_id' => 5,
            'id' => 9,
            'likes' => '❤️ 10',
            'img' => './img/fred-moon-ofBf15Ps_0k-unsplash.jpg',
            'author' => 'Bo Berntsson',
        ],

        [
            'title' => 'Dead man found in graveyard',
            'published_date' => '2017-07-01 20:50',
            'content' => "I'm baby subway tile banh mi jianbing lumbersexual mustache street art kogi ea lomo. Blog officia tattooed taiyaki, ex coloring book farm-to-table actually. Fingerstache photo booth glossier, shaman nisi slow-carb salvia. Locavore chartreuse small batch, pinterest snackwave exercitation reprehenderit scenester food truck narwhal. Palo santo banh mi iceland in, gentrify fanny pack mollit kogi cray pabst. Irony tbh adaptogen, ennui mixtape slow-carb tote bag occaecat vinyl nostrud. Pug sed minim aesthetic, kogi ut semiotics swag lyft flexitarian.

                Exercitation tumblr sunt sartorial, 8-bit cornhole aliquip. Echo park gluten-free do disrupt 90's twee poutine XOXO PBR&B. Austin polaroid mollit squid non velit lomo locavore ipsum snackwave DIY. Pour-over locavore sartorial mumblecore shoreditch blog poke cred, cronut green juice quinoa wolf typewriter normcore.
                
                Dolor hammock fingerstache, mlkshk hell of franzen PBR&B cold-pressed deep v ut ut. Pabst beard echo park cold-pressed, ea id venmo tote bag raw denim messenger bag ramps try-hard. Fam cliche microdosing laborum tumblr tacos truffaut gochujang celiac la croix sed four dollar toast iPhone. Paleo elit typewriter unicorn. Knausgaard tote bag tofu esse enim labore, tilde brooklyn kogi neutra. Poke sed enamel pin cardigan DIY gochujang.
                
                Dummy text? More like dummy thicc text, amirite?",
            'summary' => "We are going to make placeholder text great again. Greater than ever before. Lorem Ipsum's father was with Lee Harvey Oswald prior to Oswald's being",
            'author_id' => 5,
            'id' => 10,
            'likes' => '❤️ 200',
            'img' => './img/einar-storsul-hw2wB-Sqg0k-unsplash.jpg',
            'author' => 'Bo Berntsson',
        ],
    ];
