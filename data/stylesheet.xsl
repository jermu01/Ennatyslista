<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" version="1.0">
    <xsl:template match="/">
        <html>
            <head>
                <title>Pisteet</title>
            </head>
            <body>
            <h1>Tulokset</h1>
                <table border="5">
                    <th>nimi</th>
                    <th>pisteet</th>
                <xsl:for-each select="information/score">
                <tr>
                    <td><xsl:value-of select="nimi"/></td>
                    <td><xsl:value-of select="pisteet"/></td>
                </tr>
                </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
    </xsl:output>
</xsl:stylesheet>
