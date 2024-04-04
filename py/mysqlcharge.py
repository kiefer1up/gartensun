#!/usr/bin/env python
# coding: utf-8
import pandas as pd
import numpy as np
import pymysql.cursors

con =    pymysql.connect(host="localhost",
        user="kiefer",
        password="pini",
        database="testpini")

cur= con.cursor()
cur.execute('select cod from prd')
a=cur.fetchall()
con.commit()
aray = np.asarray(a)
con.close()

i = 0
while i < len(a):
    hcod = ''.join(aray[i])
    w1="<?php require_once '../head.php'; \ninclude '../databaseconnect.php';\nsession_start();\n$query  = 'SELECT * FROM `prd` WHERE cod = \""+hcod+"\"';\n$result =mysqli_query($conexion,$query);\nmysqli_close($conexion);\n$row = mysqli_fetch_assoc($result);?>\n"
    w2="<div class='col-8'>\n\t<h1>GartenSun automatiza tu jardin</h1>\n\t<p>venta y asesoría en proyectos en areas verdes</p>\n\t<div class='col-12 vitrina'>\n\t\t<div class='col-12 prod'>\n\t\t\t<img src='../img/<?php echo $row['cod']; ?>.jpg' height='250'/></a>\n\t\t</div>\n\t\t<div class='col-12 prod'>\n\t\t\t<span><?php echo $row['name']; ?></span>\n\t\t\t<span>$<?php echo $row['price']; ?></span>\n\t\t</div>\n\t</div>\n</div>\n<?php require_once '../aside.php';\nrequire_once '../foot.php';?>"
    archi1=open("../prod/"+hcod+".php","w")
    archi1.write(w1)
    archi1.write(w2)
    archi1.close()
    i += 1
else:
    print("lista la carga de productos el total es de:",i,"productos")
