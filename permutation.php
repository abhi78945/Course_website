<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permutation and Combination</title>
    
</head>

<body>
   <h3>1. From a group of 7 men and 6 women, five persons are to be selected to form a committee so that at least 3 men are there on the committee. In how many ways can it be done?</h3>
    <p>   A. 564<br>
       B. 645<br>
       C. 735<br>
       D. 756<br></p>

    <b>Answer</b> Option D<br>
    <b>Explanation:</b><br>
    We may have (3 men and 2 women) or (4 men and 1 woman) or (5 men only).<br>
    <br>
    Required number of ways	= (7C3 x 6C2) + (7C4 x 6C1) + (7C5)<br>
    (7 x 6 x 5/ 3 x2 x 1)	x	(6 x 5/ 2 x 1) + (7C3 x 6C1) + (7C2)<br>
    = (525 + 210 + 21)<br>
    = 756.<br>
    

    <h3> 2. In how many different ways can the letters of the word 'LEADING' be arranged in such a way that the vowels always come together?</h3>
    <p>   A. 360<br>
       B. 480<br>
       C. 720<br>
       D. 625<br></p>

    <b>Answer</b> Option C<br>
    <b>Explanation:</b><br>
    The word 'LEADING' has 7 different letters. <br>
    When the vowels EAI are always together, they can be supposed to form one letter.<br>
    <br>
    Now, 5 (4 + 1 = 5) letters can be arranged in 5! = 120 ways. <br>
    The vowels (EAI) can be arranged among themselves in 3! = 6 ways.<br>
    Required number of ways = (120 x 6) = 720.<br>

    <h3> 3.In how many different ways can the letters of the word 'CORPORATION' be arranged so that the vowels always come together?</h3>
    <p>   A. 810<br>
        B. 1140<br>
         C. 2504<br>
         D. 50400<br></p>
      
    <b>Answer</b> Option D<br>
    <b>Explanation:</b><br>
    In the word 'CORPORATION', we treat the vowels OOAIO as one letter.<br>
    Thus, we have CRPRTN (OOAIO).<br>

    This has 7 (6 + 1) letters of which R occurs 2 times and the rest are different.<br>
    <br>
    Number of ways arranging these letters =	7! / 2!	= 2520.<br>
    Now, 5 vowels in which O occurs 3 times and the rest are different, can be arranged in	5! / 3!	= 20 ways.<br>
    <br>
    Required number of ways = (2520 x 20) = 50400.<br>

    
    
    
    
</body>

</html>
