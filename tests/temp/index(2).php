Function calculateEndDateAndTime(startTime As Range, wip As Range, targetPerHour As Range, scheduledBreakStart_1 As Range, scheduledBreakEnd_1 As Range, scheduledBreakStart_2 As Range, scheduledBreakEnd_2 As Range, Optional param As Range)
    'Dim currentTime As String
    'currentTime = Time
    'currentTime = Date & " " & Time
    'Range("A1").NumberFormat = "dd-mmm-yyyy hh:mm:ss AM/PM"
    'Worksheets("Sheet1").Range("A1:B3").Formula = "=RAND()"
    'calculateEndDateAndTime = currentTime
    
    'calculateEndDateAndTime = WorksheetFunction.Sum(startTime, WorksheetFunction.Time(10, 0, 0))
    'calculateEndDateAndTime = Application.WorksheetFunction.Sum(1, 2, 3)
    
    '''''''''''''''''''''''
    'Dim MyDate As Variant
    'MyDate = DateSerial(2012, 5, 8)
    'calculateEndDateAndTime = Format(MyDate, "mmmm dd, yyyy")
    '''''''''''''''''''''''
    '''''''''''''''''''''''
    'Dim MyDateTime As Date
    'Dim MyDate As Date
    'Dim MyTime As Date
    'Dim strDate As String
    'Dim strTime As String
    'strDate = Format(Range("A1"), "mm/dd/yyyy")
    'strTime = Format(Range("A1"), "hh:mm:ss AMPM")
    'MyDate = DateValue(strDate)
    'MyTime = TimeValue(strTime)
    'IsDate (MyTime)
    'DateDiff("s", CDate(strDate), CDate(strTime))
    '''''''''''''''''''''''
    'calculateEndDateAndTime = (TimeValue(Format(startTime, "hh:mm:ss AMPM")) + Hour(10))
    
    Dim tempDateTime_1 As Date

    tempDateTime_1 = CDate(startTime)
    tempDateTime_1 = DateAdd("h", (wip / targetPerHour), tempDateTime_1)
    calculateEndDateAndTime = Format(tempDateTime_1, "hh:mm:ss AMPM")
End Function
