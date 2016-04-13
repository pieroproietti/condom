Public Function FieldNames() As String

    Dim sTable As String
    Dim rs As DAO.Recordset
    Dim n As Long
    Dim sResult As String

    sTable = InputBox("Name of table?")
    sTable = LCase(sTable)
    If sTable = "" Then
        Exit Function
    End If

    Set rs = CurrentDb.OpenRecordset(sTable)

    sResult = "<?php " & vbCrLf
    sResult = sResult & "function " & sTable & "Create($ds, $dd)" & vbCrLf
    sResult = sResult & "{" & vbCrLf
    sResult = sResult & "   $dbstring = 'drop table `" & sTable & "`;';" & vbCrLf
    sResult = sResult & "   echo ""Creazione " & sTable & "; \r\n"";" & vbCrLf
    sResult = sResult & "   $dd->query($dbstring);" & vbCrLf
    sResult = sResult & "   $dbstring = '" & vbCrLf
    sResult = sResult & "      CREATE TABLE `" & sTable & "` (" & vbCrLf
    With rs
        For n = 0 To .Fields.Count - 1
            sResult = sResult & "         `" & LCase(.Fields(n).Name) & "` "
            sResult = sResult & GetType(.Fields(n).Type, .Fields(n).size)
            If n = (.Fields.Count - 1) Then
                sResult = sResult & " DEFAULT NULL " & vbCrLf
            Else
                sResult = sResult & " DEFAULT NULL, " & vbCrLf
            End If
        Next 'n
        .Close
    End With
    sResult = sResult & "       ) ENGINE=InnoDB DEFAULT CHARSET=latin1; ';" & vbCrLf
    sResult = sResult & "   $dd->query($dbstring);" & vbCrLf
    sResult = sResult & "   echo '<br/>';" & vbCrLf
    sResult = sResult & "   echo $dbstring;" & vbCrLf
    sResult = sResult & "   echo '<br/>';" & vbCrLf
    sResult = sResult & "}" & vbCrLf
    sResult = sResult & vbCrLf

    Set rs = Nothing
    Set rs = CurrentDb.OpenRecordset(sTable)
    sResult = sResult & "function " & sTable & "Copy($ds, $dd)" & vbCrLf
    sResult = sResult & "{" & vbCrLf
    sResult = sResult & "   $sql=""SELECT "";" & vbCrLf
    For x = 0 To rs.Fields.Count - 1
        sResult = sResult & "   $sql.=""" & LCase(rs.Fields(x).Name)
        If x = (rs.Fields.Count - 1) Then
            sResult = sResult & " "";" & vbCrLf
        Else
            sResult = sResult & ", "";" & vbCrLf
        End If

    Next
    sResult = sResult & "   $sql.=""FROM " & sTable & " "";" & vbCrLf
    sResult = sResult & "   $sql.=""WHERE 1"";" & vbCrLf

    sResult = sResult & "   echo '<br/>';" & vbCrLf
    sResult = sResult & "   echo $sql;" & vbCrLf
    sResult = sResult & "   echo '<br/>';" & vbCrLf
    sResult = sResult & "   $rows = $ds->query($sql, PDO::FETCH_ASSOC);" & vbCrLf
    sResult = sResult & "   foreach ($rows as $row) {" & vbCrLf
    sResult = sResult & "      $dd->insert('" & sTable & "', $row);" & vbCrLf
    sResult = sResult & "   }" & vbCrLf
    sResult = sResult & "}" & vbCrLf


    Set rs = Nothing

    InputBox "Result:" & vbCrLf & vbCrLf _
            & "Copy this text (it looks jumbled, but it has one field on each line)", _
            "FieldNames()", sResult


End Function

Function GetType(i, size)

' Text    Use for text or combinations of text and numbers. 255 characters maximum
' Memo    Memo is used for larger amounts of text. Stores up to 65,536 characters. Note: You cannot sort a memo field. However, they are searchable
' Byte    Allows whole numbers from 0 to 255  1 byte
' Integer Allows whole numbers between -32,768 and 32,767 2 bytes
' Long    Allows whole numbers between -2,147,483,648 and 2,147,483,647   4 bytes
' Single  Single precision floating-point. Will handle most decimals  4 bytes
' Double  Double precision floating-point. Will handle most decimals  8 bytes
' Currency    Use for currency. Holds up to 15 digits of whole dollars, plus 4 decimal places. Tip: You can choose which country's currency to use    8 bytes
' AutoNumber  AutoNumber fields automatically give each record its own number, usually starting at 1  4 bytes
' Date/Time   Use for dates and times 8 bytes
' Yes/No  A logical field can be displayed as Yes/No, True/False, or On/Off. In code, use the constants True and False (equivalent to -1 and 0). Note: Null values are not allowed in Yes/No fields   1 bit
' Ole Object  Can store pictures, audio, video, or other BLOBs (Binary Large OBjects) up to 1GB
' Hyperlink   Contain links to other files, including web pages
' Lookup Wizard   Let you type a list of options, which can then be chosen from a drop-down list  4 bytes


Select Case i

    Case dbBoolean
    GetType = "smallint"

    '----------------------------------------
    ' numeric
    '----------------------------------------
    ' integer
    Case dbBigInt
    GetType = "int(" & size & ")"

    Case dbLong
    GetType = "int(" & size & ")"

    Case dbInteger
    GetType = "int(" & size & ")"

    ' decimal
    Case dbCurrency
    GetType = "decimal(10,2)"

    Case dbDecimal
    GetType = "decimal(10,2)"

    Case dbDouble
    GetType = "decimal(10,2)"

    Case dbFloat
    GetType = "decimal(10,2)"

    Case dbNumeric
    GetType = "decimal(10,2)"

    Case dbSingle
    GetType = "decimal(10,2)"


    '----------------------------------------
    ' binary
    '----------------------------------------
    Case dbBinary
    GetType = "dbBinary"

    Case dbByte
    GetType = "dbByte"

    Case dbLongBinary
    GetType = "dbLongBinary"

    Case dbVarBinary
    GetType = "dbVarBinary"

    '----------------------------------------
    ' char
    '----------------------------------------
    Case dbChar
    GetType = "varchar(" & size & ")"

    Case dbMemo
    GetType = "text"

    Case dbText
    GetType = "varchar(" & size & ")"
    'GetType = "tinytext"



    '----------------------------------------
    ' date
    '----------------------------------------
    Case dbDate
    GetType = "datetime"

    Case dbTime
    GetType = "datetime"

    Case dbTimeStamp
    GetType = "datetime"


    ' GUID
    Case dbGUID
    GetType = "dbGUID"

End Select
End Function
