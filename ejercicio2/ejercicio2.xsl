<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>
    <xsl:template match="/">
    <html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"/>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <div class="container">
            <xsl:apply-templates select="usuarios" />
        </div>
    </body>
    </html>

    </xsl:template>

    <xsl:template match="usuarios">
        <xsl:for-each select=".">
                <xsl:for-each select="usuario">
                    <div class="card mt-2 mb-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><xsl:value-of select="nombre"/></h5>
                            <h6><xsl:value-of select="apellido"/></h6>      
                            <p>Dirección: <xsl:value-of select="direccion"/></p>
                            <p><xsl:value-of select="direccion/@ciudad"/> -
                            <xsl:value-of select="direccion/pais"/></p>
                            <p>Contacto: <xsl:value-of select="contacto"/></p>
                        </div>
                    </div>
                </xsl:for-each>
        </xsl:for-each>
    </xsl:template>

</xsl:stylesheet>