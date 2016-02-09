<<<<<<< HEAD
# staging-m
=======
# staging-matatenna

# Subir archivos
git add </Nombre del archivo/>

git commit -m "</Nombre del archivo/>"

# Bajar archivos archivos

git pull 

git pull https://github.com/matatenna/staging-m
>>>>>>> 459832cdd8a50a41555bef81cf7084dccc89ffd5


CREAR EL NUEVO REPOSITORIO 
=======
echo "# staging-m" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/matatenna/staging-m.git
git push -u origin master

CLONARLO
=======
git remote add origin https://github.com/matatenna/aprendegit.git
git push -u origin master

RECUERDA
=======
1. Al iniciar una jornada de trabajo, lo primero que hay que hacer es:

git pull origin <rama>   <Esta puede ser "master" , "development" , "staging">

