<?php
  include_once 'includes/women.php';
  include_once 'includes/functions.php';
  include_once 'includes/header.php';

  $sky = 'blue';
?>
    <div id="main">
      <section id="famous">
        <a name="famous"></a>
        <h2>Famous Women</h2>
        <a class="jump up" href="#">&igrave;</a>
        <a class="jump down" href="#organizations">&iacute;</a>
        <div class = "wrapper">

          <?php
          foreach ($women as $woman)
          {
            viewWoman($woman['name'], $woman['link'], $woman['years'], $woman['image'], $woman['biography']);
          }

          ?>

        </div>
      </section>

      <section id="organizations">
        <a name="organizations"></a>
        <h2>Organizations</h2>
        <a class="jump up" href="#famous">&igrave;</a>
        <a class="jump down" href="#facts">&iacute;</a>
        <div class = "wrapper">
          <p>These are some awesome organizations that help women in computing.
            This is a brief list and there are many more out there.</p>

          <ul>
            <li>
              <a href="http://www.ncwit.org/">National Center for Women & Information Technology</a>
              <img src="images/logos/ncwit.png" alt="National Center for Women & Information Technology logo" />
            </li>
            <li>
              <a href="http://anitaborg.org/">Anita Borg Institute for Women and Technology</a>
              <img src="images/logos/anitaborg.gif" alt="Anita Borg Institute for Women and Technology logo" />
            </li>
            <li>
              <a href="http://adainitiative.org/">The Ada Initiative</a>
              <img src="images/logos/adainitiative.png" alt="The Ada Initiative logo" />
            </li>
            <li>
              <a href="http://girldevelopit.com/">Girl Develop It</a>
              <img src="images/logos/gdi.png" alt="Girl Develop It logo" />
            </li>
            <li>
              <a href="http://www.blackgirlscode.com/">Black Girls Code</a>
              <img src="images/logos/blackgirlscode.jpg" alt="Black Girls Code logo" />
            </li>
            <li>
              <a href="http://railsgirls.com/">Rails Girls</a>
              <img src="images/logos/railsgirls.png" alt="Rails Girls logo" />
            </li>
          </ul>
        </div>
      </section>

      <section id="facts">
        <a name="facts"></a>
        <h2>Fun Facts</h2>
        <a class="jump up" href="#organizations">&igrave;</a>
        <a class="jump down" href="#bottom">&iacute;</a>
        <div class = "wrapper">
          <ul>
            <li>Every year the Anita Borg Institute holds the
              <a href="http://anitaborg.org/initiatives/ghc/">Grace Hopper
              Celebration of Women in Computing</a> conference to bring the
              research and career interests of women in computing to the
              forefront</li>
            <li>25% of the computing workforce were women in 2011
              <a href="http://www.bls.gov/cps/cpsaat11.htm">reference</a></li>
            <li>The <a href="https://twitter.com/DevChix">DevChix</a> google group has over 1000 members.</li>
            <li>Girl Develop It has <a href="http://girldevelopit.com/chapters">chapters</a> in eleven cities.</li>
            <li>Women eared 18% of the Computer and Information Sciences
              undergraduate degrees in 2010. <a href="http://www.ncwit.org/sites/default/files/resources/2012bythenumbers_web.pdf">
              reference</a></li>
            <li>The U.S. Bureau of Labor Statistics projects that by 2018, there
              will be a total of nearly 1.4 million computing-related jobs added
              in the U.S., an increase of 22% from 2008.
              <a href="http://www.ncwit.org/sites/default/files/resources/scorecard2010_printversion_web.pdf">reference</a></li>
            <li>The median age of women in computing and mathematical occupations
              is 42. <a href="http://www.ncwit.org/blog/did-you-know-demographics-technical-women">reference</a></li>
            <li>Of the 20 occupations with the highest median earnings for women,
              5 are computing occupations: computer software engineers, computer
              and information systems managers, computer programmers, computer
              scientists and systems analysts, and network systems and data
              communications analysts. <a href="http://www.ncwit.org/blog/did-you-know-demographics-technical-women">reference</a></li>
          </ul>
        </div>
      </section>
    </div>

    <footer>
      <nav>
        <ul>
          <li>
            <a href="#famous">Famous Women</a>
          </li>
          <li>
            <a href="#organizations">Organizations</a>
          </li>
          <li>
            <a href="#facts">Fun Facts</a>
          </li>
        </ul>
      </nav>
    </footer>
    <a name="bottom"></a>
  </body>
</html>
