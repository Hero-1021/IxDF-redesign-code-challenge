<?php

namespace Database\Seeders;

use Database\Factories\MasterclassFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

final class MasterclassSeeder extends Seeder
{
    /** Run the database seeds. */
    public function run(): void
    {
        MasterclassFactory::new()
            ->withSpeaker([
                'name' => 'Jarvis Moore',
                'title' => 'Senior Design Lead, Design Systems at Microsoft',
                'description' => 'Jarvis Moore is a Senior Design Lead at Microsoft and a Founding Member of Black UX Labs. He has over 15 years of experience in design and has worked with companies like Google, Facebook, and Amazon. Jarvis is passionate about using design to create products that are accessible, inclusive, and user-friendly. He is also an advocate for diversity and inclusion in the tech industry and is committed to helping underrepresented groups succeed in design and technology.',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/speakers/vxZMhUtCd42E5RF9DlN42dyx70sMHHqilXmDxmWg.png',
            ])
            ->createOne([
                'title' => 'AI for Design Systems: How to Stay Ahead and Lead',
                'slug' => 'ai-for-design-systems-how-to-stay-ahead-and-lead',
                'description' => '
            <p>In this Master Class, you will:</p>
<ul>
<li><p><strong>Get excited</strong> about how Artificial Intelligence (AI) can automate the repetitive, time-consuming tasks of design systems! You’ll learn how to <strong>deliver faster—without cutting corners</strong>. Let AI handle documentation, accessibility checks, and design token optimization so you can focus on <strong>creative work</strong>.</p></li>
<li><p><strong>Make yourself invaluable with AI</strong> as your backstage assistant—it will take care of tedious tasks so you can <strong>shine where it matters</strong>. Consistent designs, enhanced efficiency, and code-ready assets mean you deliver more with less effort. By 2028, the AI design software market will hit $13.2 billion—embrace AI, and <strong>stay ahead of the curve</strong>.</p></li>
<li><p><strong>Gain confidence and credibility</strong> as you explore <strong>adaptive components</strong> and <strong>hyper-personalized interfaces</strong> that respond to user needs in real-time. You’ll address AI bias and questions of ownership and learn to <strong>balance automation with human creativity</strong>. You’ll get practical steps you can apply immediately in your daily work, no matter your experience level. If you want to learn how to use AI for <strong>smarter workflows, faster results</strong>, and better design, then this Master Class is for you!</p></li>
</ul>
<p>You’ll learn from the best:</p>
<p>In this Master Class, you’ll learn from one of the world’s leading experts:</p>
<ul>
<li>Jarvis Moore: Senior Design Lead, Design Systems at Microsoft and Founding Member of Black UX Labs.</li>
</ul>',
                'short_description' => 'Learn AI for Design Systems with Jarvis Moore',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/heros/OD32hW2NwiLDaRGgG4TZDEIkrZjaSHNpJQZDDWwN.png',
                'start_at' => now()->addDays(7),
                'finish_at' => now()->addDays(7)->addHours(1),
            ]);

        MasterclassFactory::new()
            ->withSpeaker([
                'name' => 'Don Norman',
                'title' => 'Founding Director - Design Lab, University of California, San Diego. Co-Founder, Nielsen Norman Group',
                'description' => 'Don Norman is a legend in UX design. Since the 1960s, he has been at the forefront of human-computer interaction and user-centered design (or human-centered design, as he prefers to call it). His group coined the term "User Experience" while working as vice president of the Advanced Technology Group at Apple in the 1980s. 
He has a long legacy in academia, for example, at the University of California, San Diego, where he is professor and head of the UCSD Design Lab. He also co-founded the Nielsen Norman Group, a world-renowned design consultancy. He has published the globally best-selling book on design, The Design of Everyday Things, which has become foundational to the field of design.',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/speakers/tCETMpxiy1z1Yrax3doV7ugasqpEzC5ateUjrM3n.png',

            ])
            ->createOne([
                'id' => 93,
                'title' => 'Exclusive: Design for a Better World, a Discussion with Don Norman',
                'slug' => 'exclusive-design-for-a-better-world-a-discussion-with-don-norman',
                'description' => "
  <p><strong>&quot;The world is a mess,&quot;</strong> especially when it comes to the climate crisis, according to legendary pioneer of design, Don Norman.</p>\n
  <p><strong>But what can we, as designers, do to fix it?</strong></p>\n
  <p>In this Master Class, get insights from Don Norman from his upcoming book, &quot;Design for a Better World&quot;, before it even hits the shelves and learn <strong>how you can help create meaningful, sustainable change</strong>.</p>\n
  <p>In &quot;Design for a Better World&quot; Don Norman proposes a new way of designing, one that recognizes our place in a complex global system where even the simplest of behaviors can affect the entire world.</p>\n
  <p><strong>This is a once in a lifetime opportunity</strong> to learn from the &quot;godfather of design&quot; and ask him questions. And, no matter where you are in your career, <strong>this Master Class will help you design for a better world</strong>.</p>\n
  <p>Don's experience as both a scientist and business executive gives him a unique perspective to show how to <strong>make these changes while maintaining a thriving economy</strong>.</p>\n
  <p>In this Master Class, you'll learn:</p>\n
  <ul>\n
  <li>Where we've gone wrong and <strong>how you can help make things better</strong>.</li>\n
  <li>Why we designers are the best placed to help solve the biggest problems, as we have <strong>three super-powers</strong>.</li>\n
  <li>That the key to change is <strong>how we shape human behaviour</strong>, specifically in three areas: <strong>meaning, sustainability, and humanity-centeredness</strong>.</li>\n
  <li>The <strong>five principles of humanity-centered design</strong> and how you can apply them.</li>\n
  <li>What is the <strong>circular economy</strong> and how you can use its three principles to <strong>tackle the climate crisis</strong>.</li>\n
  </ul>\n
  <p><strong>Register for this Master Class</strong> to have a unique opportunity to <strong>learn first-hand from Don Norman</strong>.</p>\n
  <p>Let the change begin. <strong>Help design for a better world!</strong></p>\n
  ",
                'short_description' => 'Learn how to design for a better world with Don Norman',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/heros/v6KcddEYAlUA4NpGaRzBaHRNENfLRvx9gA5Lv8Ok.jpg',
                'start_at' => Carbon::parse('2023-01-11 17:00:00'),
                'finish_at' => Carbon::parse('2023-01-11 18:00:00'),
            ]);

        MasterclassFactory::new()
            ->withSpeaker([
                'name' => 'Niwal Sheikh',
                'title' => 'Product Design Lead, Netflix',
                'description' => 'Niwal Sheikh\'s love for design started during her childhood, where she explored various creative mediums. Growing up as an immigrant with a South Asian background, Niwal shifted from studying Environmental Science in university to pursue a career in design. She is passionate about creating accessibility in the design and technology industries, and has worked as a product designer in both health services and financial technology, for large enterprise banks and startups alike.

As a mentor, Niwal coaches aspiring designers on portfolio work, interview skills, and career development. She has also shared her expertise as a speaker at events such as ReThink and ExperienceXD, and consults with various organizations on the best design practices.

Currently, Niwal works as a product designer at Netflix and is excited to explore the entertainment and media industries.',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/speakers/FUdhUYjuKqz6zwDmIn1P1bM3mjQEwHzTAWI38G4U.jpg',
            ])
            ->createOne([
                'id' => 123,
                'title' => 'Human-Centered Design for AI',
                'slug' => 'human-centered-design-for-ai',
                'description' => "
                <p>Artificial Intelligence (AI) is changing how design works, bringing significant shifts and <strong>critical ethical questions</strong>. From how algorithms work to issues of fairness and keeping user information private, the blend of AI and design raises crucial concerns about our responsibilities in shaping the future of design.</p>\n
  <p>In this Master Class, <strong>Netflix Product Designer Niwal Sheikh</strong> will talk about <strong>human-centered design for AI</strong> and how to deal with <strong>ethical challenges</strong>.</p>\n
  <p>In this Master Class, you'll learn:</p>\n
  <ul>\n
  <li>The <strong>best ethical practices in AI</strong>.</li>\n
  <li>Key considerations for <strong>design justice and ethics in AI</strong>.</li>\n
  <li>The concepts of <strong>bias, discrimination, shadow banning and fairness</strong> in AI.</li>\n
  <li>A <strong>collaborative and multi-disciplinary approach</strong> to establishing ethical AI in our organizations.</li>\n
  <li>The <strong>future of AI in Design</strong>.</li>\n
  </ul>\n
  <p>Join this Master Class to learn how to work with AI while ensuring ethical practices and the development of ethical products.</p>\n
                ",
                'short_description' => 'Learn about human-centered design for AI with Niwal Sheikh',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/heros/7q7XuCRCZUaYG4Y4L7W6VZBrjWIKFn6Fq9rOn3kq.png',
                'start_at' => now()->addDays(14),
                'finish_at' => now()->addDays(14)->addHours(1),
            ]);

        MasterclassFactory::new()
            ->withSpeaker([
                'name' => 'Ioana Teleanu',
                'title' => 'Senior Product Designer, UiPath; Founder, UX Goodies',
                'description' => 'Ioana Teleanu is an experienced UX Leader who has worked with renowned companies such as UiPath and ING Bank. She has also provided consulting and design services for several early-stage startups. Ioana is also a seasoned Design Educator who has established a community of over 250,000 UX enthusiasts through her social channel UX Goodies. She has created educational initiatives such as the Honest UX Talks podcast and a UX Design course on Domestika.

Ioana is working on an exciting AI product at UiPath while simultaneously creating content on her social channels, with topics such as the future of UX design, design careers, AI, and more.

Images: © Domestika, Used with permission.',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/speakers/7PuxXJeJWEZXJEviU2nTvOby4DJwl0Gn03AcJ2DJ.jpg',
            ])
            ->createOne([
                'id' => 100,
                'title' => 'AI-Powered UX Design: How to Elevate Your UX Career',
                'slug' => 'ai-powered-ux-design-how-to-elevate-your-ux-career',
                'description' => "
  <p>Are you a designer looking to <strong>stay ahead of the curve</strong> in a rapidly evolving industry? Look no further than the exciting <strong>artificial intelligence (AI) technology</strong> world! Learn how to <strong>incorporate AI tools into your design workflow</strong> and leverage powerful new techniques to automate repetitive tasks, enhance data analysis, and improve overall user engagement.</p>\n
  <p>It's no secret that the design landscape changes fast, and staying relevant means embracing new tools and techniques. In this 1-hour Master Class with <strong>UX leader Ioana Teleanu</strong>, you'll discover the latest applications of <strong>AI in UX Design</strong> and gain valuable insights into navigating the challenges of incorporating AI into your workflow.</p>\n
  <p>In this Master Class, you'll learn:</p>\n
  <ul>\n
  <li>The <strong>current applications of AI in UX Design</strong> and how it's changing the industry.</li>\n
  <li>The <strong>challenges</strong> of incorporating AI into UX Design and how to overcome them.</li>\n
  <li>How <strong>AI will help UX Designers and why it won't replace them</strong>.</li>\n
  <li>The <strong>skills you'll need to stay relevant</strong> in the future design market.</li>\n
  <li>The importance of developing a <strong>future-open mindset</strong> as our world rapidly changes.</li>\n
  </ul>\n
  <p>Don't miss out on this opportunity to stay ahead of the curve in the ever-evolving field of UX Design!</p>\n
  ",
                'short_description' => 'Learn how to incoprorate AI into your UX design workflow with Ioana Teleanu',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/heros/KHP67REe2CdKF2dYOgYpDZfjSsvR88ejFO49Sxt9.png',
                'start_at' => Carbon::parse('2023-06-07 16:00:00'),
                'finish_at' => Carbon::parse('2023-06-07 17:00:00'),
            ]);

        MasterclassFactory::new()
            ->withSpeaker([
                'name' => 'Michael Nebeling',
                'title' => 'Associate Professor, University of Michigan',
                'description' => 'Michael has been critically studying novel interactive technologies since well before the iPhone. He is now a professor at the University of Michigan, where he leads the [Information Interaction Lab](https://mi2lab.com), a human-computer interaction research group focused on virtual, augmented, and mixed reality applications (XR).

With previous support from Microsoft, Meta, Epic Games, Mozilla, Lenovo, and Disney, the goal of his research has been to obtain a better understanding of key issues in XR and provide holistic design frameworks and tools for creating usable, effective, and safe XR experiences.

At U-M, he is XR Faculty Innovator-in-Residence with the [U-M wide XR Initiative](https://ai.umich.edu/xr-initiative/). He teaches XR design both in the residential program at U-M and as part of his [XR MOOC series](https://xrmooc.com), a three-course AR/VR specialization launched on Coursera in December 2020.

Michael joined U-M in 2016 after completing a postdoc in the HCI Institute at Carnegie Mellon University and a PhD in the Department of Computer Science at ETH Zurich. Previously, he was on a one-year sabbatical at Meta Reality Labs Research in Redmond where he contributed to the design and development of future, everyday augmented reality interfaces.',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/speakers/IPW0tCRjUFbwoojdx4pU0shGIaPX4U44tYxJ7COZ.jpg',
            ])
            ->createOne([
                'id' => 124,
                'title' => 'How to Innovate with XR',
                'slug' => 'how-to-innovate-with-xr',
                'description' => "<p>There is a lot of enthusiasm around extended reality (XR) technologies, encompassing virtual, augmented, and mixed reality, and for good reasons. The ways in which these technologies collectively allow us to see and interact with a digitally-enhanced physical world around us are truly stunning. Theoretically, we could now wear modern XR headsets all day long and benefit from their virtual assistance in everyday activities at home, work, and, to some extent, even on the go. Yet, nobody does that. Why is that? Why are we still so far away from the promise that XR would one day replace the smartphone? Should this even be the goal?</p>\n
  <p>In many ways, the answer is yes. Head-worn displays bring many advantages and absolutely hold the potential to revolutionize and significantly improve the way we perceive and interact with digital information around us. At the same time, we need to be extremely careful with how we design and develop for this future of user experiences that seamlessly blend the physical and virtual worlds around us. As designers, we hold a tremendous responsibility.</p>\n
  <p>In this Master Class, <strong>Michael Nebeling, professor and XR faculty innovator-in-residence at the University of Michigan</strong>, will show you <strong>how you can innovate <em>in</em> and <em>with</em> XR</strong>—taking into account the unique affordances and opportunities within the XR medium and using XR to carry the benefits over to the real world. Michael will share his vision for future XR tools and applications that help shape designers' mindsets and positively impact the user experience.</p>\n
  <p>You'll learn:</p>\n
  <ul>\n
  <li>What the key challenges and barriers are to the more <strong>widespread adoption of XR</strong>.</li>\n
  <li>Why innovation in XR is often misguided by trying to find <strong>the &quot;killer app&quot;</strong>.</li>\n
  <li>How to instead <strong>approach XR design in a creative and systematic way</strong>.</li>\n
  <li>What <strong>frameworks and tools</strong> are needed to rapidly advance XR design and innovation.</li>\n
  <li>Which <strong>groups of users</strong> are the most likely to first benefit from the advantages with XR.</li>\n
  <li>How to <strong>scale XR innovation</strong> to cater to the needs of a diverse set of stakeholders.</li>\n
  <li>What it takes to create <strong>inclusive and safe XR experiences</strong>.</li>\n
  <li>Why you need to keep pushing to continuously <strong>innovate and disrupt design with XR</strong>.</li>\n
  </ul>\n
  <p>Join this Master Class to learn how to think outside the box and design for a future where XR technologies are interwoven with everyday life. Learn how to approach the design of future XR interfaces despite current technical limitations and many open issues, and how to ask the right questions and help shape design towards truly innovative and impactful XR experiences.</p>\n",
                'short_description' => 'Learn how to design future XR interfaces with Michael Nebeling',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/heros/zA6UrzYBMQM3QX2iuY1nRVU8wGescgebpY5Ymbxl.png',
                'start_at' => Carbon::parse('2023-12-14 16:00:00'),
                'finish_at' => Carbon::parse('2023-12-14 17:00:00'),
            ]);

        MasterclassFactory::new()
            ->withSpeaker([
                'name' => 'Howard Pinsky',
                'title' => 'Senior Design Evangelist, Adobe',
                'description' => 'Howard Pinsky is a Design Evangelist at Adobe with over five years of experience in this role and 15+ years in the industry.

His mission is to share his knowledge and experience with the design and Photoshop communities through video, live streams, and creative events. Howard specializes in engaging and educational content, marketing strategies and provides insights and feedback for future products and updates. He has a passion for design, user experience, and graphic design and has reached over 70 million views on his training videos.',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/speakers/O33h3fVYTS0xra4ycd8WePVBh6Yino6E0Obl8cal.jpg',
            ])
            ->createOne([
                'id' => 136,
                'title' => 'Adobe Firefly and Generative AI: Deep Dive',
                'slug' => 'adobe-firefly-and-generative-ai-deep-dive',
                'description' => "
                <p>Unlock Adobe Firefly's full potential in our upcoming Master Class, led by <strong>Howard Pinsky, Adobe's Senior Design Evangelist</strong>. Discover how <strong>Adobe Firefly's cutting-edge image model</strong> can <strong>transform your design practices</strong>, enhancing creativity and efficiency.</p>\n
  <p>In this 1-h Masterclass, you'll learn:</p>\n
  <ul>\n
  <li><strong>Text-to-Image</strong> generation.</li>\n
  <li>Refine and influence outputs using <strong>Structure and Style Reference.</strong></li>\n
  <li>Perfect your images using <strong>Generative Fill and Expand</strong>.</li>\n
  <li>Integrate <strong>generative AI into your Photoshop and Illustrator workflows</strong>.</li>\n
  </ul>\n
  <p>Don't miss this opportunity to enhance your creative toolbox with Adobe Firefly's generative AI capabilities. Register now and transform the way you design!</p>\n",
                'short_description' => 'Learned advanced generative AI with Howard Pinsky',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/heros/wLIUfHxBCGtVjoDxmrq9XPEZXgtm5fkplfvQkt9u.png',
                'start_at' => Carbon::parse('2024-05-30 16:00:00'),
                'finish_at' => Carbon::parse('2024-05-30 17:00:00'),
            ]);

        MasterclassFactory::new()
            ->withSpeaker([
                'name' => 'Henry Daggett',
                'title' => 'Design System Lead, Societe Generale CIB',
                'description' => 'Henry Daggett is a Digital Product Designer with a background in Fine art and Architecture. He currently leads Design Systems at Societe Generale CIB. He is driven by a passion for component design and seamless Designer/Developer collaboration. 
Beyond work, he delves into painting commissions, writes about Design Systems, and explores coding. 
Connect with Henry on [LinkedIn](https://www.linkedin.com/in/henrydaggett/?originalSubdomain=uk) for insights and design discussions.',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/speakers/5onjW5RNCeOmZPYN3qRz38hauDmPTwODcRH1icYr.jpg',
            ])
            ->createOne([
                'id' => 139,
                'title' => 'Design Tokens: Powering Your Design System',
                'slug' => 'design-tokens-powering-your-design-system',
                'description' => "
<p><strong>Design Tokens</strong> are among the <strong>smallest but most powerful parts of Design Systems</strong>. They unlock a deeper level of tooling for systems that can enable quick rebrands, theming and easy updates to all kinds of component styling.</p>\n
  <p>But what actually are Design Tokens? Do we need them? Who are they for? How do we build them and use them? And why is everyone so excited about them?</p>\n
  <p>In this Master Class, Henry Daggett, Design System Lead at Societe Generale, will give a complete overview of Design Tokens; starting with their origins and actual usage in established design systems, to how you can begin building Design Tokens in your Design Systems and projects and show their value to stakeholders.</p>\n
  <p>You'll learn:</p>\n
  <ul>\n
  <li><strong>When and where to use tokens</strong>, and how to justify their value.</li>\n
  <li>What level of tokens you need for <strong>different design system environments</strong>.</li>\n
  <li>The <strong>difference between tokens, variables and styles</strong>.</li>\n
  <li><strong>How to begin</strong> creating tokens and <strong>use Figma variables</strong>.</li>\n
  <li><strong>How to name your tokens</strong>, so they are easy to use.</li>\n
  </ul>\n
  <p>Join this Master Class to learn all you'll need to know to get started with Design Tokens, alongside plenty of resources to help you understand and build them—whether you're working on an established Design System or just beginning your journey into them.</p>\n
  <p>Even if you can't attend live, register to gain access to a recording that you can watch at any time after the broadcast.</p>\n
",
                'short_description' => 'Learn about Design Tokens with Henry Daggett',
                'picture_path' => 'https://public-images.interaction-design.org/masterclasses/heros/2eOU9GmQ3IxECJDxyhqMt7YzOfqQ9dEEIioeHHE3.jpg',
                'start_at' => Carbon::parse('2024-07-18 16:00:00'),
                'finish_at' => Carbon::parse('2024-07-18 17:00:00'),
            ]);
    }
}
