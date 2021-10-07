<?php include("top.php");?>
<h1>Logisim CPU!</h1>
<h5>Made a cpu in logisim, an emulator for it, an assembler to write code for it and """compiler"" for a simple language <i>BareBasic</i></h4>
<hr>
It has:
<ul>
    <li>an 8 bit ALU (ADD, SUB, MLT, logic and shift operations)</li>
    <li>7 general purpose registers,</li>
    <li>a 256 byte stack</li>
    <li>64k RAM (20k reserved)</li>
    <li>64k ROM</li>
    <li>32x32 RGB display</li>
</ul>
<br>
I wrote a microcode assembler to compile the rom i made for it - it has a 256 byte microcode ROM memory.
There's also an assembler that generates actual cpu machine instructions, and to make writing software for the cpu easier,
a web based emulator. Also started working on a compiled language for it named BareBasic, but got bored so it can only do variables, 
if statements and embed assembly code at the moment.
<br>
<br>
<h4>Looks like this:</h4>
<br>
<br>
<img style="max-width: unset !important;" src="/coolplaceonline/media/logisim-cpu/CPU.svg" alt="">
<br>
<br>
<h4>Look inside the ALU:</h4>
<br>
<br>
<img  src="/coolplaceonline/media/logisim-cpu/ALU.svg" alt="">
<img  src="/coolplaceonline/media/logisim-cpu/COMPUTE.svg" alt="">
<img  src="/coolplaceonline/media/logisim-cpu/ALUblock.svg" alt="">
<br>
<br>
<br>
<br>
<br>
<br>
<h3>Everything else is even more boring</h3>
The tooling is written in c++, typescript and python. It runs way slow, and has an unpatched bug that makes the LOAD instruction 
not work properly sometimes. Drawing an image on the screen in logisim-evolution takes about 12 minutes on my ThinkPad T420,
but 95% of that is just copying the image byte by byte into RAM.
<br>
<video width="300px" controls  src="/coolplaceonline/media/logisim-cpu/draw.mp4"></video>
<br>
<br>
<i>I can't screenrecord</i>
<br>
<a href="https://github.com/ishakd00/fun/tree/master/cs/logisim-cpu/Images">More images and project files here</a>
<br>
<br>
<br>
<?php include("bottom.php");?>
