object Form1: TForm1
  Left = 330
  Top = 204
  Width = 704
  Height = 428
  Caption = 'MIDPS LAB1.C'
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 13
  object PaintBox1: TPaintBox
    Left = 392
    Top = 96
    Width = 281
    Height = 281
  end
  object Label1: TLabel
    Left = 576
    Top = 16
    Width = 90
    Height = 13
    Caption = 'Data si ora curente'
  end
  object Label2: TLabel
    Left = 176
    Top = 40
    Width = 285
    Height = 20
    Caption = 'Resurse grafice ale mediului C++ Builder'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -17
    Font.Name = 'MS Sans Serif'
    Font.Style = []
    ParentFont = False
  end
  object Panel1: TPanel
    Left = 264
    Top = 96
    Width = 89
    Height = 281
    Color = clRed
    TabOrder = 0
  end
  object Panel2: TPanel
    Left = 264
    Top = 96
    Width = 89
    Height = 281
    Color = clGray
    TabOrder = 1
  end
  object Button1: TButton
    Left = 16
    Top = 144
    Width = 209
    Height = 25
    Caption = 'Start'
    TabOrder = 2
    OnClick = Button1Click
  end
  object Button2: TButton
    Left = 16
    Top = 192
    Width = 209
    Height = 25
    Caption = 'Stop'
    TabOrder = 3
    OnClick = Button2Click
  end
  object Button3: TButton
    Left = 16
    Top = 240
    Width = 209
    Height = 25
    Caption = 'Exit'
    TabOrder = 4
    OnClick = Button3Click
  end
  object Edit1: TEdit
    Left = 560
    Top = 40
    Width = 113
    Height = 21
    TabOrder = 5
  end
  object Timer1: TTimer
    OnTimer = Timer1Timer
  end
  object Timer2: TTimer
    Interval = 500
    OnTimer = Timer2Timer
    Top = 40
  end
end
