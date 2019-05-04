<template>
  <h2>The primary questions becomes</h2>

  <h4>To embed or not embed</h4>
  <p>relationship of two things in your application. should one of those be a sub document should be contained within the same recore as the thing it is related to or should hey be two separate collections
  </p>
  <ul>
    <li>1. Is the embedded data wanted 80% of the time? when you have the outer or other related object</li>
    <li>2. How often do you want the embedded data without the containing document?</li>
    <li>3. Is the embedded data a bounded set?
      <p>
        I mean on Amazon like super popular books have hundreds milions of rating so it is probably Ok, but if it's unbounded set you dont want to embed it in that bound small like them  
      </p>
    </li>
    <li>4. Is that bound small?
        <p>
          Maybe milions of views still are being recorded within sight of a book would be a really bad idea.
          And the reason is these documents are limited to 16 megabytes so no single record of MongoDb be can
          be large than 16 megabytes. And this is not a limitation of MongoDB. This is them trying to protect you from yourself. You don't want to go and just say query by say ISBN and try to pull back a book and actually read 100 megabytes off a desk and over the network that would destroy the performance of your databse.

          So having these very very larger records is a problem so they actually set an upper bound on how large that can be and that limit is right now currently at the time of recording 16 megabytes. But you shouldn't thing of 16MB as like. Well If It's 10 MB everything is fine. We're still got a long ways to go.

          Now you should try to keep these you know in the KB twenties hundreds of KB not MB. Because that's going to really hurt to your database performance unless in some situation It just makes. a ton of sense of these very lage documents.

          So having small bounded sets means that your documents won't grow into a huge huge monolithic things that are hard to work with. 
        </p>
    </li>
    <li>How varied are your queries?
      <p>
        Also how varied are your queries. so one of the things that you do with documents database is you try to structure the documents to answer the most common questions in then most well structured way.
        So if you are aways going to say I would like to on my pages show a book and its related ratings you would absolutely put the ratings inside the book because that means you just do a query against a book and you already have that like kind of rejoined data.
        But get sort of a data warehouse and you are asking all kinds of questions from all different sort of applications then trying to understand well that is the right to build my document so it matches the queries I typically do or the ones that I need to be really quikc and fast that becomes hard because there's all these different  queries and they have like you know one the way you model for one is actually the opposite of the way the model for the other. right. So depending how focused your application is or how many applications are used in th database you have. A different answer this question to the more specific your queries are the more likely you are to embed things and structure them exactly to match those queries related to that is are you working with an integration database or an application database. We'll get to that next 
      </p>
    </li>
    <li>abc</li>
  </ul>
</template>