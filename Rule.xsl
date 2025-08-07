<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 
<xsl:template match="/"> 
 <html> 
 <body> 
  <h1 align="center">Movie Data</h1> 
   <table border="3" align="center" > 
   <tr> 
    <th>Title</th> 
    <th>Year</th> 
    <th>Country</th> 
    <th>Summary</th>
   </tr> 
    <xsl:for-each select="movies/movie"> 
   <tr> 
    <td><xsl:value-of select="title"/></td> 
    <td><xsl:value-of select="year"/></td> 
    <td><xsl:value-of select="country"/></td> 
    <td><xsl:value-of select="summary"/></td> 
   </tr> 
    </xsl:for-each> 
    </table> 
</body> 
</html> 
</xsl:template> 
</xsl:stylesheet> 