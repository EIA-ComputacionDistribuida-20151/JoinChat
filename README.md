<h1>Sistema de Chat JoinChat</h1>
	<h3>Equipo:</h3>
	<ul>
		<li>Isabel Lozano.</li>
		<li>Felipe Calad.</li>
		<li>Joinner Ovalle.</li>
		<li>John Edgar Congote.</li>
		<li>Juan Diego Pérez Martínez.</li>
	</ul>
	<h3>Roles:</h3>
	<ul>
		<li>Servicio Web: Php, html, JS.</li>
		<li>Comunicación: WebRTC, Python, JS.</li>
		<li>Almacenamiento: Mysql, Java.</li>
		<li>I+D(Documentación):  Login: Google, Facebook, Twitter, OpenID, BioID</li>
	</ul>
	<h3>Repositorio:</h3>
	<p>
		Se está utilizando un repositorio Github, conectado a máquina virtual koding para alojar la aplicación. El nombre del proyecto es JoinChat…..
		El link de la pag es: <a href="http://joinchat.kladfelipe.koding.io/ ">http://joinchat.kladfelipe.koding.io</a>
	</p>
	<h3>Git:</h3>
	<p>
		Es un sistema de control de versiones, o sea un sistema que registra los cambios realizados sobre el tiempo sobre un archivo o un conjunto de estos, permitiendo recuperar versiones específicas más adelante.
	</p>
	<p>Existen 2 tipos de VCS:</p>
	<p>Centralizados:</p>
	<img src="./imagenesDocumentacion/centralVCS.jpg">
	<p>Distribuidos:</p>
	<img src="./imagenesDocumentacion/distriVCS.jpg">
	<p>Git es un VCS distribuido.</p>
	<h4> Funcionamiento de Git:</h4>
	<img src="./imagenesDocumentacion/funcionamientoGIT.jpg">
	<h4>3 estados de Git:</h4>
	<p>Committed: Los datos están almacenados de manera segura en la base de datos local.</p>
	<p>Modified: Hay modificaciones pero no están confirmadas en la base de datos.</p>
	<p>Staged: Un archivo modificado esta marcado para ir en la próxima confirmación.</p>
	<h4>Secciones principales:</h4>
	<p>
		El directorio de Git: Es la parte donde se almacenan los metadatos y la base de datos de objetos del proyecto. Es lo que se copia al clonar un repositorio desde otro ordenador.
	</p>
	<p>
		El directorio de trabajo: Es una copia de una versión del proyecto. Se saca de la base  de datos comprimida en el directorio Git y se coloca en el disco para uso y modificación.
	</p>
	<p>El área de preparación(índice): Es un archivo sencillo que contiene información a cerca de lo que va a ir en la próxima confirmación.</p>
	<h4>Flujo de trabajo:</h4>
	<ol>
		<li>Se modifican los archivos en el directorio de trabajo.</li>
		<li>Se preparan los archivos añadiéndolos al área de confirmación.</li>
		<li>
			Se confirman los cambios(commit), lo que toma los archivos como están en el área de preparación y almacena esas instantáneas de manera permanente en el directorio.
		</li>
	</ol>
	<h4>Acciones importantes Git:</h4>
	<p>Fetch sirve para traer la última versión disponible en el servidor remoto.</p>
	<p>Pull sirve para aplicarlos los cambios localmente.</p>
	<p>Commit aplica los cambios que he realizado en el servidor local.</p>
	<p>Push sirve para subir los cambios que he hecho al servidor remoto.</p>
	<h5>Los comandos para realizar estas acciones por consola son:</h5>
	<ul>
		<li>git fetch</li>
		<li>git pull</li>
		<li>git push</li>
		<li>git commit -m "Commit message"</li>
	</ul>
	<p>Para facilitar el trabajo y poderlo hacer de una manera más ágil se va a utilizar una interfaz gráfica para Git, llamada Source tree.</p>
	<p>Con Source tree podemos realizar tareas como:</p>
	<ul>
		<li>Crear y clonar repositorios de cualquier sitio, tanto Git como Mercurial. Además de integrarse perfectamente con Bitbucket o Github</li>
		<li>Commit, push, pull y merge de nuestros archivos</li>
		<li>Detectar y resolver conflictos.</li>
		<li>Consultar el historial de nuestros repositorios.</li>
	</ul>
	<h4>Crear un repositorio con Github y Sourcetree:</h4>
	<ul>
		<li>Clic en Clone/new:</li>
	</ul>
