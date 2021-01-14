<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/information">
    <html>
    <body>
    <table border="1">
        <tr>
            <th>Nimi</th>
            <th>Pisteet</th>
        </tr>
        <xsl:for-each select="score">
        <tr>
            <td><xsl:value-of select="nimi"/></td>
            <td><xsl:value-of select="pisteet"/></td>
        </tr>
        </xsl:for-each>
        </table>
    </body>
    </html>
    </xsl:template>
    </xsl:stylesheet>
